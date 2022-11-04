<?php

namespace App\Repositories;

use App\Models\Inventory;
use Illuminate\Pipeline\Pipeline;

class TopicalsRepository
{
    public function getAllTopicals($request)
    {
        //Add condition if one of the date filter is null
        $requestData = [
            'search' => isset($request->search) ? $request->search : null
        ];

        $query = Inventory::query();

        $result = app(Pipeline::class)
            ->send($query)
            ->through([
                \App\Pipelines\Search\SearchInventoryTable::class,
                \App\Pipelines\Filter\DateFilter::class
            ])->thenReturn();
        
        $data = $result ? $result : $query;
        $topicals = $data->where('type', 'Topicals')->paginate(10);

        return compact('topicals', 'requestData');
    }

    public function storeTopicals($request)
    {
        $query = Inventory::insertGetId([
            'medicine_name' => $request->medicine_name,
            'brand' => $request->brand,
            'manufacturer_date' => $request->manufacturer_date,
            'expiration_date' => $request->expiration_date,
            'type' => $request->type,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return $query;
    }

    public function updateTopicals($request, $topicalsId)
    {
        $query = Inventory::where('id', $topicalsId->id)->update([
            'medicine_name' => $request->medicine_name,
            'brand' => $request->brand,
            'manufacturer_date' => $request->manufacturer_date,
            'expiration_date' => $request->expiration_date,
            'type' => $request->type,
        ]);

        return $query;
    }

    public function deleteTopicals($topicalsId)
    {   
        return Inventory::find($topicalsId->id)->delete();
    }
}
