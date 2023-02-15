# Saya Anandita K NIM 2101114 mengerjakan soal Latihan 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. 
from mahasiswa import Mahasiswa
from query import Query
# INSTANSIASI CLASS QUERY JADI OBJEK INPUT
simpan = Query()
# DEKLARASI &inisialisasi cek
cek = True

while cek == True:
    print("---------------------------------------")
    print("||(Selamat Datang di DBMS Anandita>>||")
    print("---------------------------------------")
    print("||MENU QUERY                         ||")
    print("||1.INSERT                           ||")
    print("||2.DELETE                           ||")
    print("||3.UPDATE                           ||")
    print("||4.SHOW                             ||")
    print("||5.CLOSE                            ||")
    print("---------------------------------------")
    print("silahkan maasukan query:")
    masukan = input()
    if masukan == "INSERT":  # jika masukan sama dengan insert maka akan memanggil METHOD adddata yg ada di class query
        simpan.addData()

    elif masukan == "DELETE":  # jika masukan sama dengan DELETE maka akan memanggil METHOD deleteData yg ada di class query
        hapus = input()
        simpan.deleteData(hapus)

    elif masukan == "UPDATE":  # jika masukan sama dengan UPDATE maka akan memanggil METHOD updateData yg ada di class query
        print("Masukan NIM  yang akan diupdate")
        update = input()
        simpan.updateData(update)

    elif masukan == "SHOW":  # jika masukan sama dengan SHOW maka akan memanggil METHOD SHOW yg ada di class query
        simpan.show()
    elif masukan == "CLOSE":  # KELUAR PROGRAM
        cek = False
        print("+------------------------------------------------------+")
        print("|                   TERIMA KASIH                       |")
        print("|       TELAH MENGGUNAKAN DBMS SEDERHANA ANANDITA      |")
        print("|         If you're brave enough to say goodbye,       |")
        print("|        life will reward you with a new hello.<3      |")
        print("+------------------------------------------------------+")
