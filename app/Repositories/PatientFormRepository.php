<?php

namespace App\Repositories;

use App\Models\PatientForm;
use Illuminate\Pipeline\Pipeline;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

class PatientFormRepository
{
    public function getPatientForm()
    {
        $config = [
            // Your driver-specific configuration
            // "telegram" => [
            //    "token" => "TOKEN"
            // ]
        ];
        
        // Load the driver(s) you want to use
        DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);
        
        // Create an instance
        $botman = BotManFactory::create($config);
        
        // Give the bot something to listen for.
        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello yourself.');
        });
        
        // Start listening
        $botman->listen();
    }

    public function storePatientForm($request)
    {
        $patientForm = PatientForm::insert([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'address' => $request->address,
            'vital_signs' => $request->vital_signs,
            'heart_rate' => $request->heart_rate,
            'blood_pressure' => $request->blood_pressure,
            'temperature' => $request->temperature,
            'oxygen_saturation' => $request->oxygen_saturation,
            'reason_for_consultation' => $request->reason_for_consultation,
            'allergies' => $request->allergies,
            'maintenance_medications' => $request->maintenance_medications,
            'current_medications' => $request->current_medications,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return $patientForm;
    }
}
