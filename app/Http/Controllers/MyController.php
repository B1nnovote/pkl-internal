<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyController extends Controller
{
    private $arr = [
        ['id' => 1, 'nama' => 'faza', 'kelas' => 'xii 1'],
        ['id' => 2, 'nama' => 'regu', 'kelas' => 'xii 2'],
        ['id' => 3, 'nama' => 'ler', 'kelas' => 'xii 3'],
    ];

    public function index() //memberikan daftar data
    {
        $siswa = session('siswa_data', $this->arr);
        return view('siswa.index', ['siswa' => $siswa]);
    }

    public function show($id)
    {
        //ambil data dari session
        $data = session('siswa_data', $this->arr);
        //cari data berdasarkan id
        $siswa = collect($data)->firstwhere('id', $id);
        //jika data tidak ada
        if (! $siswa) {
            abort(404);
        }
        //dd ($siswa) untuk cek data
        return view('siswa.show', ['siswa' => $siswa]);
    }

    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $siswa = session('siswa_data', $this->arr);
        //membuat increment id otomatis
        $newId = collect($siswa)->max('id') + 1;

        //tambah data
        $siswa[] = [
            'id'    => $newId,
            'kelas' => $request->kelas,
            'nama'  => $request->nama,
        ];
        //simpan ke array siswas
        session(['siswa_data' => $siswa]);

        //kembali ke halaman siswa
        return redirect('/siswa');
    }
    public function edit($id)
    {
        //ambil data dari session
        $data = session('siswa_data', $this->arr);
        //cari data berdasarkan id
        $siswa = collect($data)->firstwhere('id', $id);
        //jika data tidak ada
        if (! $siswa) {
            abort(404);
        }
        //dd ($siswa) untuk cek data
        return view('siswa.edit', compact('siswa'));
    }
    public function update(Request $request, $id)
    {
        $data = session('siswa_data', $this->arr);
        
        foreach($data as &$item) {
            if ($item['id'] == $id) {

                $item['nama'] = $request->nama;
                $item['kelas'] = $request->kelas;
                break;
            }
        }

        session(['siswa_data' => $data]);
        return redirect('siswa');
    }
    public function destroy($id)
    {
        $siswa = session('siswa_data', $this->arr);
        $index = array_search($id, array_column($siswa,'id'));

        array_splice($siswa, $index, 1);

        session(['siswa_data'=> $siswa]);

        return redirect('siswa');
    }

}
