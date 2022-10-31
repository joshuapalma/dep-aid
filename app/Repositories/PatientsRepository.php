<?php

namespace App\Repositories;

use App\Models\Patient;
use Illuminate\Pipeline\Pipeline;

class PatientsRepository
{
    public function getAllPatient($request)
    {
        $requestData = [
            'search' => isset($request->search) ? $request->search : null
        ];

        $query = Patient::query();

        $result = app(Pipeline::class)
            ->send($query)
            ->through([
                \App\Pipelines\Search\SearchPatientTable::class,
                \App\Pipelines\Filter\DateFilter::class
            ])->thenReturn();

        $data = $result ? $result : $query;
        $patient = $data->orderBy('created_at', 'DESC')->paginate(10);

        return compact('patient', 'requestData');
    }

    public function storePatient($request)
    {
        $query = Patient::insertGetId([
            'patient_name' => $request->patient_name,
            'scheduled_appointment' => $request->scheduled_appointment,
            'reasons_for_consultation' => $request->reasons_for_consultation,
            'remarks' => $request->remarks,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return $query;
    }

    public function updatePatient($request, $patientId)
    {
        $query = Patient::where('id', $patientId->id)->update([
            'patient_name' => $request->patient_name,
            'scheduled_appointment' => $request->scheduled_appointment,
            'reasons_for_consultation' => $request->reasons_for_consultation,
            'remarks' => $request->remarks,
        ]);

        return $query;
    }

    public function deletePatient($employeeProfileId)
    {
        return Patient::find($employeeProfileId->id)->delete();
    }
}
