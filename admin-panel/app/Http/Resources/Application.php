<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Application extends Resource
{
    
    public function toArray($request)
    {
        return
            [
            'id'               => $this->id,
            'name'             => (string) $this->name,
            'latest_version'   => (string) $this->latest_version,
            'is_force_update'  => (boolean) $this->is_force_update,
            'title_of_ad'      => (string) $this->title_of_ad,
            'messge_of_ad'     => (string) $this->messge_of_ad,
            'link'             => (string) $this->link,
            'contact_email'    => (string) $this->contact_email,
            'share_format'     => (string) $this->share_format,
            'contact_format'   => (string) $this->contact_format,
            'developer_site'   => (string) $this->developer_site,
            'developer_name'   => (string) $this->developer_name,
            'developer_apps'   => (string) $this->developer_apps,
            'generated_in_app' => (string) $this->generated_in_app,
            'is_only_banner'   => (boolean) $this->is_only_banner,

        ];
    }
}
