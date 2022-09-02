<?php

/**
 * @Author: Bayu Rifki Alghifari
 * @Date:   2022-02-09 17:21:32
 * @Last Modified by:   Bayu Rifki Alghifari
 * @Last Modified time: 2022-02-09 17:39:10
 */


namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Role as Roles;

class Role extends Component
{
    use WithPagination;

    protected $queryString = ['paginate'];
    protected $listeners = ['destroy' => 'destroy'];
    private $searchable = ['name', 'guard_name'];
    public $header = 'Role',
        $search = '',
        $paginate = 10,
        $statusUpdate = false,
        $ids, $name, $guard_name;

    public function render()
    {
        $data = Roles::latest()->paginate($this->paginate);

        // Search
        if ($this->search !== null) {
            $data = Roles::latest();

            foreach ($this->searchable as $field) {
                $data = $data->orWhere($field, 'like', "%{$this->search}%");
            }

            $data = $data->paginate($this->paginate);
        }

        return view('livewire.admin.setting.role', compact('data'));
    }

    public function getDetail($id)
    {
        $exe = Roles::find($id);

        $this->ids = $exe->id;
        $this->name = $exe->name;
        $this->guard_name = $exe->guard_name;
        $this->changeStatusUpdate(true);
    }

    public function save()
    {
        if ($this->statusUpdate) {
            // Update
            $exe = Roles::find($this->ids)->update([
                'name' => $this->name,
                'guard_name' => $this->guard_name,
            ]);
        } else {
            // Create
            $exe = Roles::create([
                'name' => $this->name,
                'guard_name' => $this->guard_name,
            ]);
        }

        $this->emit('closeModal', 'myModal');
        $this->emit('alert', $this->statusUpdate ? 'Update data success' : 'Create data success');
        $this->clear();
    }

    public function destroy($id)
    {
        $exe = Roles::find($id)->delete();

        $this->emit('alert', 'Delete data success');
    }

    public function confirmDelete($id)
    {
        $this->emit('confirm', $id);
    }

    public function changeStatusUpdate($status)
    {
        $this->statusUpdate = $status;
    }

    public function clear()
    {
        $this->statusUpdate = false;
        $this->ids = null;
        $this->name = null;
        $this->guard_name = null;
    }
}
