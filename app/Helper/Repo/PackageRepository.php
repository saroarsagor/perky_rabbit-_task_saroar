<?php


namespace App\Helper\Repo;


use App\Models\Package;
use Illuminate\Http\Request;

class PackageRepository extends EntityRepository
{
     public function __construct()
    {
        parent::setEntity(Package::class);
    }

    public function list()
    {
        return Package::get();
    }

    public function getById(Request $request, int $id)
    {
        return Package::where('id', $id)->first();
    }

    /**
     * @param  string  $id
     * @return bool
     */
    public function destroyById(string $id): bool
    {
        return Package::destroy($id);
    }

    

    public function isExist(Request $request): bool
    {
        return Package::where('name', $request->input('name'))->exists();
    }
}