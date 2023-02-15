class Mahasiswa:
    def __init__(self, Nama="", Nim="", prodi="", fakultas=""):  #
        self.Nama = Nama
        self.Nim = Nim
        self.prodi = prodi
        self.fakultas = fakultas

    # Getter and Setter
    def set_Nama(self, Nama):
        self.Nama = Nama

    def set_Nim(self, Nim):
        self.Nim = Nim

    def set_prodi(self, prodi):
        self.prodi = prodi

    def set_fakultas(self, fakultas):
        self.fakultas = fakultas

    def get_Nama(self):
        return self.Nama

    def get_Nim(self):
        return self.Nim

    def get_prodi(self):
        return self.prodi

    def get_fakultas(self):
        return self.fakultas
