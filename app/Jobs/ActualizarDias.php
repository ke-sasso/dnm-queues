<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\DiasFeriados;
class ActualizarDias implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $dias = DiasFeriados::insert([
            ['ano' => '2020', 'nombre' => 'DIFUNTOS',     'dia'=>"['11-02']", "idUsuarioCreacion"=>'SYSTEM-QUEUES'],
            ['ano' => '2020', 'nombre' => 'INDEPENDENCIA','dia'=>"['09-15']", "idUsuarioCreacion"=>'SYSTEM-QUEUES'],
        ]);
    }
}
