# Jobsheet 1
# Class
• Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh objek

• Atribut atau properties adalah variabel yang menyimpan data untuk objek.

• Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh objek.
# Object
• Instansiasi dari kelas.

• Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.
# 1. Class
Class digunakan sebagai blueprint atau cetakan untuk membuat objek mahasiswa, yang memiliki atribut berupa:
1.	nama
2.	nim
3.	jurusan
   
Atribut tersebut dideklarasikan yang disebut private, artinya hanya bisa diakses dari dalam class tersebut.
# 2. Constructor
Constructor adalah fungsi khusus yang otomatis dipanggil saat sebuah objek dibuat. Pada class mahasiswa, constructor didefinisikan dengan nama __construct, yang menerima tiga parameter yaitu: $nama, $nim, dan $jurusan.
# 3. Metode
Ada beberapa metode yang ada di class ini.
1.	tampilkanData() fungsinya untuk mengembalikan data mahasiswa dalam bentuk string, yaitu nama, nim, dan jurusan.
2.	updateJurusan() fungsinya untuk mengubah nilai atribut jurusan sesuai dengan parameter yang diberikan.
3.	setNim dan setNama() fungsinya untuk mengubah nilai atribut nim dan nama.
# 4. Penggunaan atribut dan metode
Objek $mahasiswa dibuat dengan nilai awal

Nama "Sidiq Putra Nababan"

NIM"230302093",

jurusan "Teknik Informatika".
# Membuat Class dan Object
```sh
<?php
//Membuat class mahasiswa
    class Mahasiswa {
    //Membuat Properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;

    //Contractor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //Membuat Metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "<br> Nama = $this->nama <br> NIM = $this->nim <br> Jurusan = $this->jurusan";
    }
    //Membuat metode dengan nama metode updateJurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    //Membuat metode dengan nama metode setNim
    public function setNim($nim){
        $this->nim = $nim;
    }
}
//Instansiasi Objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa ("Sidiq Putra Nababan", "230302093", "Komputer dan bisnis");
echo $mahasiswa->tampilkanData();
echo "<br>===========";
$mahasiswa->updateJurusan("Rekayasa Keamanan Cyber");
echo $mahasiswa->tampilkanData();
echo "<br>===========";
$mahasiswa->setNim("230202092");
echo $mahasiswa->tampilkanData();
?> 
```
# Output
![image](https://github.com/user-attachments/assets/0a5d6673-d3c5-4739-a5c4-1706e5de39fe)
#Penjelasan:
Penjelasan:

• Class Mobil: Kelas ini memiliki dua atribut (merk dan warna) dan satu metode
(deskripsi).

• Object: $mobil1 adalah objek yang merupakan instance dari kelas Mobil.
Metode deskripsi() digunakan untuk menampilkan informasi tentang objek
tersebut.
# Implementasi Construct
```sh
<?php
    //Membuat clas Mahasiswa
    class Mahasiswa {
    //dengan properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;
    //Membuat metode dengan nama metode constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //Membuat metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "Nama = $this->nama <br> NIM = $this->nim <br> Jurusan = $this->jurusan";
    }
}
//Instansiasi objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa ("Sidiq Putra Nababan", "230302093", "Komputer dan bisnis");
echo $mahasiswa->tampilkanData();
?>
```
# Output
![image](https://github.com/user-attachments/assets/e3d3fdb5-4517-483b-a4bb-17029697998a)
# Penjelasan 
Constructor adalah metode khusus yang secara otomatis dipanggil saat objek dari kelas dibuat. Fungsinya adalah untuk menginisialisasi atribut objek dan, dalam beberapa kasus, menjalankan logika lain yang diperlukan saat objek diciptakan.
# Membuat Metode Tambahan
-  Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
   perubahan jurusan.
-  Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
```sh
<?php
    //Membuat clas Mahasiswa
    class Mahasiswa {
    //dengan properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;
        //Membuat merode dengan nama metode construstor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Membuat metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "Nama = $this->nama <br> NIM = $this->nim <br> Jurusan = $this->jurusan";
    }

    //Membuat metode dengan nama metode updateJurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}
//Instansiasi objek kelas Mahasiswa
$mahasiswa = new Mahasiswa ("Sidiq Putra Nababan", "230302093", "Komputer dan bisnis");
echo $mahasiswa->tampilkanData();
echo "<br>";
$mahasiswa->updateJurusan("Rekayasa Keamanan Cyber");
echo $mahasiswa->tampilkanData();
?>
```
# Output 
![image](https://github.com/user-attachments/assets/3bc3d5a4-fe91-460e-adac-a1b52ab2ba05)
# Penjelasan 
Metode tambahan dalam OOP memungkinkan objek untuk memiliki perilaku yang dapat digunakan dalam konteks aplikasi. Mereka membantu dalam mengorganisir kode, meningkatkan keterbacaan, dan mendukung prinsip OOP seperti enkapsulasi dan pewarisan.
# Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().
```sh
<?php
//Membuat class mahasiswa
    class Mahasiswa {
    //Membuat Properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;

    //Contractor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //Membuat Metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "<br> Nama = $this->nama <br> NIM = $this->nim <br> Jurusan = $this->jurusan";
    }
    //Membuat metode dengan nama metode updateJurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    //Membuat metode dengan nama metode setNim
    public function setNim($nim){
        $this->nim = $nim;
    }
}
//Instansiasi Objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa ("Sidiq Putra Nababan", "230302093", "Komputer dan bisnis");
echo $mahasiswa->tampilkanData();
echo "<br>===========";
$mahasiswa->updateJurusan("Rekayasa Keamanan Cyber");
echo $mahasiswa->tampilkanData();
echo "<br>===========";
$mahasiswa->setNim("230202092");
echo $mahasiswa->tampilkanData();
?>
```
# Output
![image](https://github.com/user-attachments/assets/3bb7938c-1519-4719-82dd-c6bddc9a3196)
# Penjelasan
- Atribut: Menyimpan data atau keadaan dari objek.
  
- Metode: Operasi atau fungsi yang dilakukan oleh objek.
# Tugas pertemuan 1&2
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk
menampilkan informasi tersebut.
4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses
pembuatan kelas, penggunaan metode, dan hasil output.
```sh
<?php
    //Membuat clas Dosen
    class Dosen {
    //Membuat properti nama, nip, mataKuliah
        public $nama;
        public $nip;
        public $mataKuliah;
    //Membuat metode dengan nama metode constuctor
    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    //Membuat metode dengan nama metode tampilkan Dosen
    public function tampilkanDosen() {
        return "Nama = $this->nama <br> NIP = $this->nip <br> Mata Kuliah = $this->mataKuliah";
    }
}

    //Instansiasi objek kelas Dosen
    $dosen = new Dosen("Pak Yusuf", "230302093", "Bahasa Indonesia");
    echo $dosen->tampilkanDosen();
    

?>
```
# Output
![image](https://github.com/user-attachments/assets/9b34e8a1-4ac9-4163-83ca-9500c0b9f46c)

# Jobsheet 2
# Penjelasan
# 1. Class dan Object
   - Class: Blueprint atau template untuk menciptakan objek.
   - Object: Instance dari class yang memiliki atribut (properties) dan perilaku (methods).
# 2. Encapsulation
Encapsulation adalah menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.
- 	Getter: Mengembalikan nilai dari atribut.
- 	Setter: Mengubah nilai dan atribut.
# 3. nheritance
Inheritance adalah kelas dapat mewarisi properti dan metode dari kelas lain.
- Class Pengguna: Memiliki atribut nama yang dilindungi (protected), sehingga bisa diakses oleh class turunannya (Dosen).
- Class Dosen: Menambahkan atribut mataKuliah dan metode tampilkandatadosen() untuk menampilkan data dosen.
# 4. Polymorphism
Polymorphism adalah Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
Pada kode ini, class PenggunaPolymorph adalah class dasar yang memiliki metode aksesfitur(). Class DosenPoly dan MahasiswaPoly adalah turunan yang mengoverride metode tersebut untuk memberikan output yang berbeda.
# 5. Abstraction
Abstraction adalah menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.
1.	Class PenggunaAbstraction: Adalah class abstrak yang mendeklarasikan metode abstrak aksesfitur().
2.	Class MahasiswaAbstraction dan DosenAbstraction: Mengimplementasikan metode aksesfitur() untuk menghasilkan output yang berbeda.
# Membuat Class dan Object
o Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
o Buat metode tampilkanData() dalam class Mahasiswa.
o Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
```sh
<?php
    //Membuat class Mahasiswa
    class Mahasiswa {
    //Membuat Properti dengan properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;
    //Membuat metode dengan nama metode consturctor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //membuat metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "Nama = $this->nama <br> NIM = $this->nim <br> Jurusan = $this->jurusan";
    }
}
//instansiasi objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa ("Sidiq Putra Nababan", "230302093", "Komputer dan bisnis");
echo $mahasiswa->tampilkanData();
?>
```
# Output
![image](https://github.com/user-attachments/assets/01d120f4-f1e3-4afa-ae07-7f7cc495b917)
# Penjelasan
• Class: Blueprint atau template untuk menciptakan objek.
• Object: Instance dari class yang memiliki atribut (properties) dan perilaku
(methods).
# Encapsulation
o Ubah atribut dalam class Mahasiswa menjadi private.
o Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
o Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
```sh
<?php
    //Membuat class Mahasiswa 
    class Mahasiswa {
    //Dengan properti nama, nim, jurusan
        private $nama;
        private $nim;
        private $jurusan;

        //Membuat metode dengan nama metode constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Membuat metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "<br> nama : $this->nama <br> nim : $this->nim <br> jurusan : $this->jurusan";
    }

    //Membuat metode dengan nama getName
    public function getNama(){
        return $this->nama;
    }

    //Membuat metode dengan nama getNim
    public function getNim(){
        return $this->nim;
    }
    //Membuat metode dengan nama getJurusan
    public function getJurusan(){
        return $this->jurusan;
    }

    //Membuat metode dengan nama setNama
    public function setNama($nama){
        $this->nama = $nama;
    }
    //Membuat metode dengan nama setNim
    public function setNim($nim){
        $this->nim = $nim;
    }
    //Membuat metode dengan nama setJurusan
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}

    //Instansiasi objek class mahasiswa
    $mahasiswa = new Mahasiswa("Davu", "230302092", "Teknik Informatika");
    echo $mahasiswa->tampilkanData();
    echo "<br>========";
    $mahasiswa->setNama("Sidiq");
    echo $mahasiswa->tampilkanData();
    echo "<br>";
    $mahasiswa->setNim("230902099");
    echo $mahasiswa->tampilkanData();
?>
```
# Output
![image](https://github.com/user-attachments/assets/0dacab3f-141c-45ae-a755-39d493895546)
# Penjelasan
Enkapsulasi adalah salah satu prinsip dasar dalam pemrograman berorientasi objek (OOP). Ini mengacu pada praktik mengemas data (atribut) dan perilaku (metode) dalam satu unit, yaitu kelas, serta membatasi akses langsung ke beberapa komponen objek.
# Inheritance
o Buat class Pengguna dengan atribut nama dan metode getNama().
o Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut
mataKuliah.
```sh
<?php
    //Membuat class pengguna
    class pengguna {
        //Mebuat properti nama
        protected $nama;
        //Membuat metode dengan nama construct
    public function __construct($nama){
        $this->nama = $nama;
    }
    //Membuat metode dengan nama metode getNama
    public function getNama(){
        return $this->nama;
    }
}
    //Membuat clas Dosen
    class Dosen extends pengguna {
        //Dengan properti mataKuliah
        private $mataKuliah;
        //Menggunakan metode construct
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    //Membuat metode dengan nama mmetode getMakaKuliah
    public function getMataKuliah(){
        return $this->mataKuliah;
    }
}
//Instansiasi objek class pengguna dan Dosen
$dosen = new Dosen ("Adit", "Pemograman");
echo $dosen->getNama();
echo "<br>";
echo $dosen->getMataKuliah();
?>
```
# Output
![image](https://github.com/user-attachments/assets/f5a655af-9eb6-415a-a15e-339bcdabd7bf)
# 4. Polymorphism
o Buat class Pengguna dengan metode aksesFitur().
o Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
Mahasiswa.
o Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
aksesFitur().
```sh
<?php
    //Membuat class pengguna
    class pengguna {
        //Mebuat properti nama
        protected $nama;
        //Membuat metode dengan nama construct
    public function __construct($nama){
        $this->nama = $nama;
    }
    //Membuat metode dengan nama metode getNama
    public function getNama(){
        return $this->nama;
    }
}
    //Membuat clas Dosen
    class Dosen extends pengguna {
        //Dengan properti mataKuliah
        private $mataKuliah;
        //Menggunakan metode construct
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    //Membuat metode dengan nama mmetode getMakaKuliah
    public function getMataKuliah(){
        return $this->mataKuliah;
    }
}
//Instansiasi objek class pengguna dan Dosen
$dosen = new Dosen ("Adit", "Pemograman");
echo $dosen->getNama();
echo "<br>";
echo $dosen->getMataKuliah();
?>
```
# Output
![image](https://github.com/user-attachments/assets/54c843fc-5b04-441d-b864-97189045421b)
# 5. Abstraction
o Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
o Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan
metode abstrak tersebut.
o Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi.
```sh
<?php
    //Membuat classs pengguna
    abstract class pengguna {
    //Dengan nama properti nama
        protected $nama;
    //Membuat metode dengan nama metode constuct
    public function __construct($nama){
        $this->nama = $nama;
    }
    //Membuat metode dengan nama getNama
    public function getNama(){
        return $this->nama;
    }
    //membuat metode dengan nama aksesFitur
    abstract public function aksesFitur();
    //Membuat metode dengan nama metode akses
    public function akses($nama){
        $this->nama = $nama;
    }
}
    //Instansiasi objek kelas pengguna
class Dosen extends pengguna {
        private $mataKuliah;

    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDosen() {
        return "Nama : $this->nama <br> NPM : $this->mataKuliah";
    }

    public function aksesFitur(){
        return "Nama = $this->nama";
    }

    public function akses($nama){
        parent::akses($nama);
    }
}

class Mahasiswa extends pengguna {
    protected $npm;

    public function __construct($nama, $npm){
        parent::__construct($nama);
        $this->npm = $npm;
    }
    public function tampilkanMahasiswa(){
        return "Nama : $this->nama <br> NPM : $this->npm";
    }

    public function aksesFitur(){
        return "Nama = $this->nama NPM = $this->npm";
    }

    public function akses($nama){
        parent::akses($nama);
    }
}

$dosen = new Dosen ("Pak Andes", "Jaringan");
echo $dosen->tampilkanDosen();

echo "<br>";

$mahasiswa = new Mahasiswa ("Sidiq", "230302093");
echo $mahasiswa->tampilkanMahasiswa();
?>
```
# Output
![image](https://github.com/user-attachments/assets/65ccc872-9299-4142-9f9a-50ff51992224)
# Tugas Pertemuan 3&4
```sh
<?php
    //Membuat class Mahasiswa
    class Mahasiswa {
        //Dengan properti nama, nim, jurusan
        public $nama;
        public $nim;
        public $jurusan;
        //Membuat metode dengan nama metode construct
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //Membuat metode dengan nama metode tampilkanData
    public function tampilkanData(){
        return "$this->nama, $this->nim, $this->jurusan.";
    }
}
    //Instansiasi objek class Mahasiswa
    $mahasiswa = new Mahasiswa("Sidiq Putra Nababan", "230302093", "Teknik Informatika");
    echo $mahasiswa->tampilkanData();
?>
```
# Output
![image](https://github.com/user-attachments/assets/ac9a81ab-6e3c-494f-bf89-933b169ea5ce)
 
# Jobsheet 3
# 1. Inheritance
Class Person adalah class dasar (parent class) yang berisi atribut name dengan akses protected, sehingga dapat diwarisi oleh class turunan. Class Teacher dan Student merupakan class turunan dari Person.
-	Class person memiliki atribugt name dan metode getName().
-	Class teacher mewarisi class person dan memiliki tambahan atribut teacherID.
-	Class student sama seperti teacher, class ini juga mewarisi class person, dengan tambahan atribut studentID.
# 2. Polymorphism
Polymorphism memungkinkan class yang berbeda untuk menggunakan metode yang sama dengan perilaku yang berbeda.
- Polymorphism pada getName(): Baik Teacher maupun Student mengoverride metode getName() dari class Person. Meskipun nama metode sama, hasil yang diberikan berbeda.
# 3. Encapsulation
Encapsulation melindungi data dengan membuat atribut private dan menyediakan metode getter serta setter untuk mengakses atau mengubah data tersebut.
- Pada class Student, atribut studentID adalah private, dan diakses melalui metode getStudentID() dan setStudentID().
# 4. Abstraction
Class abstrak hanya mendefinisikan struktur dari metode-metode, yang kemudian harus diimplementasikan oleh class turunannya.
1.	Class Course: Adalah class abstrak yang mendeklarasikan metode getCourseDetails(), yang harus diimplementasikan oleh class turunannya.
2.	Class OnlineCourse dan OfflineCourse: Keduanya mengimplementasikan metode getCourseDetails() yang dideklarasikan di class abstrak Course.
Contoh Penggunaan dan Output
1. Instanisasi Objek student:
1.	Mahasiswa "Aditya Nugroho" dengan ID "230302073".
2.	Metode getName() mengembalikan nama mahasiswa, dan getStudentID() menampilkan ID mahasiswa.
# Instanisasi Objek teacher:
1.	Dosen "Andi" dengan ID dosen "198765".
2.	Metode getName() mengembalikan nama dosen, dan getTeacherID() menampilkan ID dosen.
3. Instanisasi Objek OnlineCourse dan OfflineCourse:
1.	OnlineCourse dengan nama kursus "Pemrograman Web".
2.	OfflineCourse dengan nama kursus "Bahasa Inggris".
# 1. Inheritance
o Buat kelas Person dengan atribut name dan metode getName().
o Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID
  serta metode getStudentID().
```sh
<?php
//inheritance
//membuat class person
 class Person {
    protected $name;

    //constructor
    public function __construct($name){
        $this->name = $name;
    }
    //Membuat metode dengan nama methode getName
    public function getName() {
        return $this->name;
    }
 }
//membuat class student
 class Student extends Person {
    //Dengan properti StudentID
    private $studentID;
//Membuat metode dengan nama metode construct 
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
//Membuat metode dengan method getStudent
    public function getStudent(){
        return " <br> Nama : $this->name <br> 
        id = $this->studentID";
    }
//Membuat method dengan nama method setStudent
    public function setStudent() {
        return $this->studentID;
    }
}
//Instansiasi objek class Student
$student = new Student("Sidiq", "230302093");
echo $student->getStudent();
?>
```
# Output
![image](https://github.com/user-attachments/assets/b05648db-3ba5-451f-b4c7-52532529884c)
# 2. Polymorphism
o Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut
teacherID.
o Override metode getName() di kelas Student dan Teacher untuk menampilkan
format berbeda.
```sh
<?php
//Membuat class Person
 class Person {
    //Dengan properti nama
    protected $name;
//Membuat method dengan nama method contruct
    public function __construct($name){
        $this->name = $name;
    }
//Membuat method dengan nama method getName
    public function getName() {
        return $this->name;
    }
 }
//Membuat class Student
 class Student extends Person {
    //dengan properti studentID
    private $studentID;
//Membuat method dengan nama method contruct
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
//membuat method dengan nama method getStudent
    public function getStudent(){
        return " <br> Nama : $this->name <br> 
        id = $this->studentID";
    }
//Membuat method dengan nama method setStudent
    public function setStudent() {
        return $this->studentID;
    }
}
//Instansiasi objek class Student
$student = new Student("Sidiq", "230302093");
echo $student->getStudent();
?>
```
# Output
![image](https://github.com/user-attachments/assets/3d19cd06-7d5e-4ec9-977c-5c7b56517347)
# 3. Encapsulation
o Ubah atribut name dan studentID dalam kelas Student menjadi private.

o Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai
atribut name dan studentID.
```sh
<?php
//Membuat class Person
 class Person {
    //dengan nama properti $nama
    protected $name;
//membuat metode dengan nama metode construct
    public function __construct($name){
        $this->name = $name;
    }
//Membuat metode dengan nama methode getName
    public function getName() {
        return $this->name;
    }
 }
//Membuat class Student
 class Student extends Person {
    private $studentID;
//membuat metode dengan nama metode construct
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
//Membuat metode dengan nama metode getStudent
    public function getStudent(){
        return " <br> Nama : $this->name <br> 
        id = $this->studentID";
    }
//Membuat metode dengan nama metode getName
    public function getName() {
        return "Nama : $this->name ID : $this->studentID";
    }
//Membuat method dengan nama method setStudent
    public function setStudent($studentID) {
        $this->studentID = $studentID;
    }
//Membuat metode dengan nama metode setName
    public function setName($name) {
        $this->name = $name;
    }
}
//Instansiasi objek class Student
$student = new Student("Sidiq", "230302093");
echo $student->getStudent();
?>
```
# Output
![image](https://github.com/user-attachments/assets/2b641c15-eb49-423c-9e53-185536cfb045)
# 4. Abstraction
o Buat kelas abstrak Course dengan metode abstrak getCourseDetails().

o Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan
getCourseDetails() untuk memberikan detail yang berbeda.
```sh
<?php
    //Membuat class Person
 class Person {
    //Dengan properti nama
    protected $name;
    //Membuat metode dengan nama metode construct
    public function __construct($name){
        $this->name = $name;
    }
    //Membuat metode dengan nama metode getNama
    public function getName() {
        return $this->name;
    }
 }
//Membuat class Student
 class Student extends Person {
    //dengan properti studentID
    private $studentID;
//Membuat metode dengan nama metode contruct
    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
//Membuat metode dengan nama metode getStudent
    public function getStudent(){
        return " <br> Nama : $this->name <br> 
        id = $this->studentID";
    }
//Membuat metode dengan nama metode getName
    public function getName() {
        return "Nama : $this->name ID : $this->studentID";
    }
}
//Membuat abstract class Course
    abstract class Course {
        //dengan properti coursename
        protected $coursename;
//Membuat netode dengan nama metode contruct
    public function __construct($coursename) {
        $this->coursename = $coursename;
    }
//Membuat abstract metode getCourseDetails
    abstract public function getCourseDetails();
    }
//Membuat class OnlineCourse
    class OnlineCourse extends Course {
        //dengan metode getCourse
        public function getCourseDetails() {
            return "<br> Nama Online : $this->coursename";
        }
    }
//Membuat class OfflineCourse
    class OfflineCourse extends Course {
        //dengan metode getCourseDetails
        public function getCourseDetails() {
            return "<br>Nama Offline : $this->coursename";
        }
    }
//Instansiasi objek class OnlineCourse
    $onlinecourse = new OnlineCourse("PWEB");
    echo $onlinecourse->getCourseDetails(); "<br>";
//Instasiasi objek class OfflineCourse
    $offlinecourse = new OfflineCourse("IPA");
    echo $offlinecourse->getCourseDetails();
?>
```
# Output
![image](https://github.com/user-attachments/assets/c5406b1a-99ad-4fbe-bba2-70e855350c6f)
# Tugas Pertemuan 5&6
Buat proyek PHP dengan studi kasus sebagai berikut:
1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan
Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan
override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang
berbeda.
4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di
kelas Mahasiswa.
5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing
memiliki cara tersendiri untuk mengelola pengajuan jurnal.
```sh
<?php
//Membuat classPerson
    class Person {
        //Dengan properti nama
        protected $nama;
//Membuat method dengan nama method contruct
    public function __construct($nama) {
        $this->nama = $nama;
    }
//membuat method dengan nama method getRole
    public function getRole() {
        return "Nama : $this->nama";
    }
//Membuat method dengan nama methos getNama
    public function getNama() {
        $this->nama;
    }
}
//Membuat class Dosen
    class Dosen extends Person {
        //Dengan properti nidn
        private $nidn;
    //Membuat method dengan nama method construct
        public function __construct($nama, $nidn){
            parent::__construct($nama);
            $this->nidn = $nidn;
        }
//Membuat methode dengan nama methode getRole
        public function getRole() {
            return parent::getRole(). " <br> 
                    NIDN : $this->nidn";
        }
         //Membuat methode dengan nama methode setRole
        public function setRole() {
            return "NIDN : $this->nidn";
    }
}
//Membuat class Mahasiswa
    class Mahasiswa extends Person {
        //Dengan nama properti nim
        private $nim;
//Membuat methode dengan nama methode contruct
    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }
//Membuat methode dengan nama methode getRole
    public function getRole() {
        return parent::getRole()." <br>
                NIM : $this->nim";
    }
//Membuat methode dengan nama methode setRole
    public function setRole() {
        return "NIM : $this->nim";
    }
}
//Membuat abstract class Jurnal 
    abstract class Jurnal extends Person {
        protected $penulis;
//Methode dengan nama methode contruct
    public function __construct($penulis){
        $this->penulis = $penulis;
    }
//Membuat abstract methode getjurnal
    abstract public function getJurnal();
    }
//Membuat class JurnalDosen
    class JurnalDosen extends Jurnal {
//MEmbuat methode dengan nama methode contruct
        public function __construct($penulis)    
        {
            parent::__construct($penulis);
        }
        //MEmbuat methode dengan nama methode getJurnal
        public function getJurnal() {
            return "<br> Nama Jurnal : $this->penulis";
        }
    }
//Membuat class JurnalMahasiswa
    class JurnalMahasiswa extends Jurnal {
        //Membuat methode dengan nama methode getJurnal
        public function getJurnal() {
            return "<br> Penulis Buku Bahasa Indonesia adalah $this->penulis";
        }
    }
//Instansiasi objek class Jurnal Dosen
    $jurnal = new JurnalDosen("Risqi");
    echo $jurnal->getJurnal();
    $jurnal = new JurnalMahasiswa("Sidiq");
    echo $jurnal->getJurnal();
    $jurnal = new JurnalMahasiswa("sidiq");
    echo $jurnal->getJurnal();
    $jurnal = new JurnalMahasiswa("Indra");
    echo $jurnal->getJurnal();
?>
```
# Output
![image](https://github.com/user-attachments/assets/3a2ab1b5-636b-42c1-aac4-5de6f29a35ec)
