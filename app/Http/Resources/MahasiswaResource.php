<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'nim'=>$this->nim,
            'nama'=>$this->nama,
            'foto'=>$this->foto,
            'kelas_id'=>$this->kelas_id,
            'jurusan'=> strtoupper($this->jurusan),
            'no_handphone'=>$this->no_handphone,
            'email'=>$this->email,
            'tanggal_lahir'=>$this->tanggal_lahir,
        ];
    }
}
