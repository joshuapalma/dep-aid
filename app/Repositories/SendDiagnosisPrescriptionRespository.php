<?php

namespace App\Repositories;

use App\Models\PatientForm;
use App\Models\SendDiagnosis;
use Carbon\Carbon;

class SendDiagnosisPrescriptionRespository
{
    public function sendEmail ($request)
    {
        dd($request->all());

        $query = SendDiagnosis::create([
            'patient_name' => $request->patient_id,
            'diagnosis' => $request->diagnosis,
            'prescriptions' => $request->prescriptions,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        

        return $query;
    }   
}
