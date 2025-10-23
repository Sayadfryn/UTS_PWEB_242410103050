<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Controller extends \Illuminate\Routing\Controller
{
    private function initializeSessionData()
    {
        if (!session()->has('hewan')) {
            session(['hewan' => [
                ['id' => 1, 'nama_hewan' => 'Sapi Brahman', 'kode_hewan' => 'S001', 'tanggal_masuk' => '2025-01-10', 'id_pakan' => 1, 'id_obat' => 1, 'keterangan' => 'Sapi sehat', 'gambar_link' => ''],
                ['id' => 2, 'nama_hewan' => 'Kambing Etawa', 'kode_hewan' => 'K001', 'tanggal_masuk' => '2025-02-15', 'id_pakan' => 2, 'id_obat' => 2, 'keterangan' => 'Perlu vaksin', 'gambar_link' => ''],
                ['id' => 3, 'nama_hewan' => 'Sapi Limousin', 'kode_hewan' => 'S002', 'tanggal_masuk' => '2025-03-01', 'id_pakan' => 1, 'id_obat' => 3, 'keterangan' => 'Anak sapi', 'gambar_link' => ''],
                ['id' => 4, 'nama_hewan' => 'Sapi PO', 'kode_hewan' => 'S003', 'tanggal_masuk' => '2025-03-10', 'id_pakan' => 3, 'id_obat' => 1, 'keterangan' => 'Siap potong', 'gambar_link' => ''],
                ['id' => 5, 'nama_hewan' => 'Kambing Kacang', 'kode_hewan' => 'K002', 'tanggal_masuk' => '2025-04-05', 'id_pakan' => 4, 'id_obat' => 4, 'keterangan' => 'Berat turun', 'gambar_link' => ''],
                ['id' => 6, 'nama_hewan' => 'Domba Garut', 'kode_hewan' => 'D001', 'tanggal_masuk' => '2025-04-20', 'id_pakan' => 4, 'id_obat' => 2, 'keterangan' => 'Kambing dewasa', 'gambar_link' => ''],
                ['id' => 7, 'nama_hewan' => 'Sapi Simental', 'kode_hewan' => 'S004', 'tanggal_masuk' => '2025-05-01', 'id_pakan' => 1, 'id_obat' => 5, 'keterangan' => 'Perlu pengamatan', 'gambar_link' => ''],
                ['id' => 8, 'nama_hewan' => 'Kuda Pacu', 'kode_hewan' => 'K003', 'tanggal_masuk' => '2025-05-10', 'id_pakan' => 5, 'id_obat' => 6, 'keterangan' => 'Aktif', 'gambar_link' => ''],
                ['id' => 9, 'nama_hewan' => 'Sapi Madura', 'kode_hewan' => 'S005', 'tanggal_masuk' => '2025-06-02', 'id_pakan' => 2, 'id_obat' => 1, 'keterangan' => 'Perlu pembersihan kandang', 'gambar_link' => ''],
                ['id' => 10, 'nama_hewan' => 'Kambing Boer', 'kode_hewan' => 'K004', 'tanggal_masuk' => '2025-06-15', 'id_pakan' => 3, 'id_obat' => 3, 'keterangan' => 'Siap dikawin', 'gambar_link' => ''],
                ['id' => 11, 'nama_hewan' => 'Domba Merino', 'kode_hewan' => 'D002', 'tanggal_masuk' => '2025-07-01', 'id_pakan' => 4, 'id_obat' => 2, 'keterangan' => 'Wool bagus', 'gambar_link' => ''],
                ['id' => 12, 'nama_hewan' => 'Kerbau', 'kode_hewan' => 'KB01', 'tanggal_masuk' => '2025-07-10', 'id_pakan' => 1, 'id_obat' => 7, 'keterangan' => 'Tenang', 'gambar_link' => ''],
            ]]);
        }

        if (!session()->has('pakan')) {
            session(['pakan' => [
                ['id' => 1, 'nama_pakan' => 'Rumput Gajah', 'jenis' => 'Hijauan', 'stok' => 100],
                ['id' => 2, 'nama_pakan' => 'Konsentrat', 'jenis' => 'Pakan Tambahan', 'stok' => 50],
                ['id' => 3, 'nama_pakan' => 'Jerami', 'jenis' => 'Hijauan Kering', 'stok' => 80],
                ['id' => 4, 'nama_pakan' => 'Pelet Domba', 'jenis' => 'Pelet', 'stok' => 40],
                ['id' => 5, 'nama_pakan' => 'Oat', 'jenis' => 'Bijian', 'stok' => 60],
                ['id' => 6, 'nama_pakan' => 'Silase', 'jenis' => 'Fermentasi', 'stok' => 30],
                ['id' => 7, 'nama_pakan' => 'Rumput Laut (supl.)', 'jenis' => 'Suplement', 'stok' => 20],
                ['id' => 8, 'nama_pakan' => 'Mineral Block', 'jenis' => 'Mineral', 'stok' => 15],
            ]]);
        }

        if (!session()->has('obat')) {
            session(['obat' => [
                ['id' => 1, 'nama_obat' => 'Vitamin B', 'jenis' => 'Vitamin', 'dosis' => '1ml/kg', 'deskripsi' => 'Peningkat nafsu makan'],
                ['id' => 2, 'nama_obat' => 'Antibiotik', 'jenis' => 'Obat', 'dosis' => '2ml/kg', 'deskripsi' => 'Untuk infeksi'],
                ['id' => 3, 'nama_obat' => 'Vaksin Brucella', 'jenis' => 'Vaksin', 'dosis' => '0.5ml', 'deskripsi' => 'Pencegahan brucellosis'],
                ['id' => 4, 'nama_obat' => 'Anti-parasit', 'jenis' => 'Antiparasit', 'dosis' => '1 tablet/10kg', 'deskripsi' => 'Cacingan dan kutu'],
                ['id' => 5, 'nama_obat' => 'Suplement Elektrolit', 'jenis' => 'Suplement', 'dosis' => '5ml/ekor', 'deskripsi' => 'Cegah dehidrasi'],
                ['id' => 6, 'nama_obat' => 'Salep Luka', 'jenis' => 'Topikal', 'dosis' => 'oles tiap hari', 'deskripsi' => 'Untuk luka luar'],
                ['id' => 7, 'nama_obat' => 'Antiinflamasi', 'jenis' => 'Obat', 'dosis' => '1ml/kg', 'deskripsi' => 'Meredakan peradangan'],
                ['id' => 8, 'nama_obat' => 'Probiotik', 'jenis' => 'Suplement', 'dosis' => '2ml/ekor', 'deskripsi' => 'Untuk pencernaan sehat'],
            ]]);
        }
    }

    private function checkAuth(Request $request)
    {
        if (!session()->has('user')) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }
        return null;
    }

    public function index()
    {
        return view('Landingpage');
    }

    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $username = trim($request->input('username'));
        $password = $request->input('password');

        $userDummy = [
            ['username' => 'admin', 'password' => '123', 'nama' => 'Administrator', 'email' => 'admin@gmial.com', 'no_hp' => '08123456789', 'alamat' => 'iJln a'],
            ['username' => 'Bahenol', 'password' => '123', 'nama' => 'Bahlil Etanol', 'email' => 'bahenol@gmail.com', 'no_hp' => '08123456780', 'alamat' => 'Diatas penderitaan rakyat'],
            ['username' => 'peternak', 'password' => '123', 'nama' => 'Tatau', 'email' => 'tatau@gmail.com', 'no_hp' => '08123456781', 'alamat' => 'Jln B'],
            ['username' => 'Orang', 'password' => '123', 'nama' => 'Orangasing', 'email' => 'orangaring@gmail.com', 'no_hp' => '08123456782', 'alamat' => 'JLN C'],
        ];

        $found = collect($userDummy)->first(function($u) use ($username, $password) {
            return $u['username'] === $username && $u['password'] === $password;
        });

        if ($found) {
            session(['user' => $found]);
            $this->initializeSessionData();
            return redirect()->route('dashboard', ['username' => $username])->with('success', 'Login berhasil');
        }

        return redirect()->route('login')->with('error', 'Username atau password salah.');
    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect()->route('login')->with('success', 'Anda telah logout');
    }

    public function dashboard(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('dashboard', ['username' => $username]);
    }

    public function dashboardHewan(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $hewan = session('hewan', []);
        $chart_data = [
            ['jenis' => 'Hijauan', 'jumlah' => 1],
            ['jenis' => 'Pakan Tambahan', 'jumlah' => 1]
        ];
        $chart_labels = array_column($chart_data, 'jenis');
        $chart_values = array_column($chart_data, 'jumlah');

        $username = $request->query('username', session('user.username', 'admin'));
        return view('dashboardHewan', [
            'username' => $username,
            'hewan' => $hewan,
            'chart_labels' => json_encode($chart_labels),
            'chart_values' => json_encode($chart_values)
        ]);
    }

    public function dashboardPakan(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('dashboardPakan', [
            'username' => $username,
            'pakan' => session('pakan', [])
        ]);
    }

    public function dashboardObat(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('dashboardObat', [
            'username' => $username,
            'obat' => session('obat', [])
        ]);
    }

    public function profile(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('profile', [
            'username' => $username,
            'user' => session('user', [])
        ]);
    }

    public function editProfile(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('editProfile', [
            'username' => $username,
            'user' => session('user', [])
        ]);
    }

    public function postEditProfile(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $user = session('user', []);
        $user['nama'] = $request->input('nama');
        $user['email'] = $request->input('email');
        $user['no_hp'] = $request->input('telepon');
        $user['username'] = session('user.username', 'admin');
        $user['alamat'] = $request->input('alamat');
        session(['user' => $user]);

        $username = $request->query('username', session('user.username', 'admin'));
        return redirect()->route('profile', ['username' => $username])->with('success', 'Profile berhasil diperbarui');
    }

    public function addHewan(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('addHewan', [
            'pakan' => session('pakan', []),
            'obat' => session('obat', []),
            'username' => $username
        ]);
    }

    public function postAddHewan(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $hewan = session('hewan', []);
        $newId = !empty($hewan) ? max(array_column($hewan, 'id')) + 1 : 1;
        $hewan[] = [
            'id' => $newId,
            'nama_hewan' => $request->input('nama_hewan'),
            'kode_hewan' => $request->input('kode_hewan'),
            'tanggal_masuk' => $request->input('tanggal_masuk'),
            'id_pakan' => $request->input('id_pakan'),
            'id_obat' => $request->input('id_obat'),
            'keterangan' => $request->input('keterangan'),
            'gambar_link' => $request->input('gambar_link')
        ];
        session(['hewan' => $hewan]);

        $username = $request->query('username', session('user.username', 'admin'));
        return redirect()->route('dashboardHewan', ['username' => $username])->with('success', 'Hewan berhasil ditambahkan');
    }

    public function viewHewan(Request $request, $id)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $hewan = collect(session('hewan', []))->firstWhere('id', $id);
        if (!$hewan) {
            return redirect()->route('dashboardHewan')->with('error', 'Hewan tidak ditemukan');
        }

        $pakan = collect(session('pakan', []))->firstWhere('id', $hewan['id_pakan'])['nama_pakan'] ?? 'Tidak ada';
        $obat = collect(session('obat', []))->firstWhere('id', $hewan['id_obat'])['nama_obat'] ?? 'Tidak ada';

        $gambar = $hewan['gambar_link'] ?: match (strtolower($hewan['nama_hewan'])) {
            'sapi' => 'https://2.bp.blogspot.com/-EyPqf2TzvHU/VUrvmxQLrUI/AAAAAAAAHZM/MFJ250n-Gz0/s1600/gambar%2Bsapi%2B(1).jpg',
            'kambing' => 'https://tse2.mm.bing.net/th/id/OIP.nj2l_RZrA8Hz6EMn2iphgwHaE8?pid=Api&P=0&h=180',
            default => 'https://awsimages.detik.net.id/visual/2015/08/24/af779d1c-4b4b-4d8a-95ad-37122c7ff1ca_169.jpg?w=650'
        };

        $username = $request->query('username', session('user.username', 'admin'));
        return view('viewHewan', [
            'hewan' => $hewan,
            'pakan_nama' => $pakan,
            'nama_obat' => $obat,
            'gambar' => $gambar,
            'username' => $username
        ]);
    }

    public function editHewan(Request $request, $id)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $hewan = collect(session('hewan', []))->firstWhere('id', $id);
        if (!$hewan) {
            return redirect()->route('dashboardHewan')->with('error', 'Hewan tidak ditemukan');
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('editHewan', [
            'hewan' => $hewan,
            'pakan' => session('pakan', []),
            'obat' => session('obat', []),
            'username' => $username
        ]);
    }

    public function postEditHewan(Request $request, $id)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $hewan = session('hewan', []);
        $index = array_search($id, array_column($hewan, 'id'));
        if ($index === false) {
            return redirect()->route('dashboardHewan')->with('error', 'Hewan tidak ditemukan');
        }

        $hewan[$index] = [
            'id' => $id,
            'nama_hewan' => $request->input('nama_hewan'),
            'kode_hewan' => $request->input('kode_hewan'),
            'tanggal_masuk' => $request->input('tanggal_masuk'),
            'id_pakan' => $request->input('id_pakan'),
            'id_obat' => $request->input('id_obat'),
            'keterangan' => $request->input('keterangan'),
            'gambar_link' => $request->input('gambar_link')
        ];
        session(['hewan' => $hewan]);

        $username = $request->query('username', session('user.username', 'admin'));
        return redirect()->route('dashboardHewan', ['username' => $username])->with('success', 'Hewan berhasil diperbarui');
    }

    public function deleteHewan(Request $request, $id)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $hewan = session('hewan', []);
        $hewan = array_filter($hewan, fn($item) => $item['id'] != $id);
        session(['hewan' => array_values($hewan)]);

        $username = $request->query('username', session('user.username', 'admin'));
        return redirect()->route('dashboardHewan', ['username' => $username])->with('success', 'Hewan berhasil dihapus');
    }

    public function addPakan(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('addPakan', [
            'username' => $username
        ]);
    }

    public function postAddPakan(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $pakan = session('pakan', []);
        $newId = !empty($pakan) ? max(array_column($pakan, 'id')) + 1 : 1;
        $pakan[] = [
            'id' => $newId,
            'nama_pakan' => $request->input('nama_pakan'),
            'jenis' => $request->input('jenis'),
            'stok' => $request->input('stok')
        ];
        session(['pakan' => $pakan]);

        $username = $request->query('username', session('user.username', 'admin'));
        return redirect()->route('dashboardPakan', ['username' => $username])->with('success', 'Pakan berhasil ditambahkan');
    }

    public function editPakan(Request $request, $id)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $pakan = collect(session('pakan', []))->firstWhere('id', $id);
        if (!$pakan) {
            return redirect()->route('dashboardPakan')->with('error', 'Pakan tidak ditemukan');
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('editPakan', [
            'pakan' => $pakan,
            'username' => $username
        ]);
    }

    public function postEditPakan(Request $request, $id)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $pakan = session('pakan', []);
        $index = array_search($id, array_column($pakan, 'id'));
        if ($index === false) {
            return redirect()->route('dashboardPakan')->with('error', 'Pakan tidak ditemukan');
        }

        $pakan[$index] = [
            'id' => $id,
            'nama_pakan' => $request->input('nama_pakan'),
            'jenis' => $request->input('jenis'),
            'stok' => $request->input('stok')
        ];
        session(['pakan' => $pakan]);

        $username = $request->query('username', session('user.username', 'admin'));
        return redirect()->route('dashboardPakan', ['username' => $username])->with('success', 'Pakan berhasil diperbarui');
    }

    public function deletePakan(Request $request, $id)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $pakan = session('pakan', []);
        $pakan = array_filter($pakan, fn($item) => $item['id'] != $id);
        session(['pakan' => array_values($pakan)]);

        $username = $request->query('username', session('user.username', 'admin'));
        return redirect()->route('dashboardPakan', ['username' => $username])->with('success', 'Pakan berhasil dihapus');
    }

    public function addObat(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('addObat', [
            'username' => $username
        ]);
    }

    public function postAddObat(Request $request)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $obat = session('obat', []);
        $newId = !empty($obat) ? max(array_column($obat, 'id')) + 1 : 1;
        $obat[] = [
            'id' => $newId,
            'nama_obat' => $request->input('nama_obat'),
            'jenis' => $request->input('jenis'),
            'dosis' => $request->input('dosis'),
            'deskripsi' => $request->input('deskripsi')
        ];
        session(['obat' => $obat]);

        $username = $request->query('username', session('user.username', 'admin'));
        return redirect()->route('dashboardObat', ['username' => $username])->with('success', 'Obat berhasil ditambahkan');
    }

    public function editObat(Request $request, $id)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $obat = collect(session('obat', []))->firstWhere('id', $id);
        if (!$obat) {
            return redirect()->route('dashboardObat')->with('error', 'Obat tidak ditemukan');
        }

        $username = $request->query('username', session('user.username', 'admin'));
        return view('editObat', [
            'obat' => $obat,
            'username' => $username
        ]);
    }

    public function postEditObat(Request $request, $id)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $obat = session('obat', []);
        $index = array_search($id, array_column($obat, 'id'));
        if ($index === false) {
            return redirect()->route('dashboardObat')->with('error', 'Obat tidak ditemukan');
        }

        $obat[$index] = [
            'id' => $id,
            'nama_obat' => $request->input('nama_obat'),
            'jenis' => $request->input('jenis'),
            'dosis' => $request->input('dosis'),
            'deskripsi' => $request->input('deskripsi')
        ];
        session(['obat' => $obat]);

        $username = $request->query('username', session('user.username', 'admin'));
        return redirect()->route('dashboardObat', ['username' => $username])->with('success', 'Obat berhasil diperbarui');
    }

    public function deleteObat(Request $request, $id)
    {
        if ($redirect = $this->checkAuth($request)) {
            return $redirect;
        }

        $obat = session('obat', []);
        $obat = array_filter($obat, fn($item) => $item['id'] != $id);
        session(['obat' => array_values($obat)]);

        $username = $request->query('username', session('user.username', 'admin'));
        return redirect()->route('dashboardObat', ['username' => $username])->with('success', 'Obat berhasil dihapus');
    }
}