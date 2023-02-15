class Mahasiswa{
    private String nama;
    private String NIM;
    private String prodi;
    private String fakultas;
    Mahasiswa()// CONSTRUCTOR
    {
    }
    void setNama(String a) // PROSEDUR UNTUK SET NAMA
    {
        this.nama = a;
    }
    void setNIM(String b) // PROSEDUR UNTUK SET NIM
    {
        this.NIM = b;
    }
    void setProdi(String c) // PROSEDUR UNTUK SET PRODI
    {
        this.prodi = c;
    }
    void setFakultas(String d)// PROSEDUR UNTUK SET FAKULTAS
    {
        this.fakultas = d;
    }
    String getNama()//PROSEDUR UNTUK MENDAPATKAN NAMA
    {

        return this.nama;
    }
    String getNIM()//PROSEDUR UNTUK MENDAPATKAN NIM
    {
        return this.NIM;
    }
    String getProdi()//PROSEDUR UNTUK MENDAPATKAN PRODI
    {

        return this.prodi;
    }
    String getFakultas()//PROSEDUR UNTUK MENDAPATKAN FAKULTAS
    {
        return this.fakultas;
    }
    
}