#include "mahasiswa.cpp"
#include <bits/stdc++.h> //untuk list
using namespace std;
class Query
{
private: // private atribut
    string nama;
    string NIM;
    string prodi;
    string fakultas;
    list<Mahasiswa> db;
    Mahasiswa data;

public:
    Query() /* constructor */
    {
    }
    void addData() // METHOD menambahkan data
    {
        // meminta data yg akan diadd
        cout << "Masukan data\n";
        cout << "Nama :";
        cin >> nama;
        cout << "NIM :";
        cin >> NIM;
        cout << "Prodi :";
        cin >> prodi;
        cout << "fakultas :";
        cin >> fakultas;
        // mengset data yg di input
        data.setNama(nama);
        data.setNIM(NIM);
        data.setProdi(prodi);
        data.setFakultas(fakultas);
        db.insert(db.end(), data); // memasukan data kedlm list
        cout << "------------------------\n";
        cout << "| data telah dimasukan |\n";
        cout << "------------------------\n";
    }
    void deleteData(string hapus) // METHOD menghapus data
    {
        for (auto i = db.begin(); i != db.end(); i++)
        {
            if ((*i).getNIM() == hapus)
            {
                db.erase(i); // hapus data yg nim nya sesuai dengan yg diminta
                break;
            }
        }
        cout << "----------------------\n";
        cout << "| data telah dihapus  |\n";
        cout << "-----------------------\n";
    }
    void updateData(string update) // METHOD UPDATE data
    {
        for (auto i = db.begin(); i != db.end(); i++)
        {
            if ((*i).getNIM() == update)
            {
                cout << "Masukan data yang akan diupdate\n";
                cout << "Nama :";
                cin >> nama;
                cout << "NIM :";
                cin >> NIM;
                cout << "Prodi :";
                cin >> prodi;
                cout << "fakultas :";
                cin >> fakultas;
                (*i).setNama(nama);
                (*i).setNIM(NIM);
                (*i).setProdi(prodi);
                (*i).setFakultas(fakultas);
                break;
            }
        }
        cout << "-----------------------\n";
        cout << "| data telah terupdate |\n";
        cout << "------------------------\n";
    }
    void show() // menampilkan
    {
        for (auto i = db.begin(); i != db.end(); i++)
        {
            cout << (*i).getNama() << " " << (*i).getNIM() << " " << (*i).getProdi() << " " << (*i).getFakultas() << " " << endl; /* code */
        }
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
    ~Query()
    {
    }
};