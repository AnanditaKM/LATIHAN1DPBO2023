from mahasiswa import Mahasiswa


class Query:
    def __init__(self, Nama="", Nim="", prodi="", fakultas="", db=[], data=Mahasiswa()):
        self.Nama = Nama
        self.Nim = Nim
        self.prodi = prodi
        self.fakultas = fakultas
        self.db = db
        self.data = data

    def addData(self):  # METHOD menambahkan data
        # meminta data yg akan diadd
        print("Masukan data")
        print("Nama :")
        self.Nama = input()
        print("NIM :")
        self.Nim = input()
        print("Prodi :")
        self.prodi = input()
        print("Fakultas :")
        self.fakultas = input()
        self.data = Mahasiswa(self.Nama, self.Nim, self.prodi, self.fakultas)
        self.db.append(self.data)
        print("------------------------")
        print("| data telah dimasukan |")
        print("------------------------")

    def show(self):  # METHOD MENAMPILKAN data
        for i in self.db:
            print(i.get_Nama()+" "+i.get_Nim()+" " +
                  i.get_prodi()+" "+i.get_fakultas())

    def updateData(self, update):  # METHOD MENGUPDATE data
        for i in self.db:
            if i.get_Nim() == update:
                print("Masukan data untuk update")
                print("Nama :")
                self.Nama = input()
                print("NIM :")
                self.Nim = input()
                print("Prodi :")
                self.prodi = input()
                print("Fakultas :")
                self.fakultas = input()
                i.set_Nama(self.Nama)
                i.set_Nim(self.Nim)
                i.set_prodi(self.prodi)
                i.set_fakultas(self.fakultas)
                print("------------------------")
                print("| data telah terupdate |")
                print("------------------------")

    def deleteData(self, hapus):  # METHOD MENGHAPUS data
        for i in self.db:
            if i.get_Nim() == hapus:
                self.db.remove(i)
                break
        print("------------------------")
        print("| data telah dihapus   |")
        print("------------------------")
