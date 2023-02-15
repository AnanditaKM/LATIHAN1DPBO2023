#include <iostream>
#include <string>
using namespace std;
class Mahasiswa
{
private: // private atribut
    string nama;
    string NIM;
    string prodi;
    string fakultas;

public:
    Mahasiswa() // CONSTRUCTOR
    {
    }
    void setNama(string a) // SET NAMA
    {
        nama = a;
    }
    void setNIM(string b) // SET NIM
    {
        NIM = b;
    }
    void setProdi(string c) // SET PRODI
    {
        prodi = c;
    }
    void setFakultas(string d) // SET FAKULTAS
    {
        fakultas = d;
    }
    string getNama() // GET NAMA
    {

        return nama;
    }
    string getNIM() // GET NIM
    {
        return NIM;
    }
    string getProdi() // GET PRODI
    {

        return prodi;
    }
    string getFakultas() // GET FAKULTAS
    {
        return fakultas;
    }
    ~Mahasiswa() // DESTRUCTOR
    {
    }
};