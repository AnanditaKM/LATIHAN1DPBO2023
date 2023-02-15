/* Saya Anandita K NIM 2101114 mengerjakan soal Latihan 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. */
#include "query.cpp"
using namespace std;
int main()
{

    string masukan;  // DEKLARASI
    Query input;     // INSTANSIASI CLASS QUERY JADI OBJEK INPUT
    bool cek = true; // DEKLARASI &inisialisasi cek

    while (cek == true) // jika cek== true maka akan meminta masukan terus sampe false/close
    {
        cout << "---------------------------------------\n";
        cout << "||<<Selamat Datang di DBMS Anandita>>||\n";
        cout << "---------------------------------------\n";
        cout << "||MENU QUERY                         ||\n";
        cout << "||1.INSERT                           ||\n";
        cout << "||2.DELETE                           ||\n";
        cout << "||3.UPDATE                           ||\n";
        cout << "||4.SHOW                             ||\n";
        cout << "||5.CLOSE                            ||\n";
        cout << "---------------------------------------\n";
        cout << "silahkan masukan query :";
        cin >> masukan;          // meminta masukan query
        if (masukan == "INSERT") // jika masukan sama dengan insert maka akan memanggil METHOD adddata yg ada di class query
        {
            input.addData();

            system("cls"); // membersihkan cmd
        }
        else if (masukan == "DELETE")
        {
            string hapus;            // inisialisasi hapus
            cin >> hapus;            // meminta masukan NIM yang akan dihapus
            input.deleteData(hapus); // panggil METHOD hapus
        }
        else if (masukan == "UPDATE")
        {
            string update; // inisialisasi update
            cout << "masukan NIM yang akan di update:\n";
            cin >> update;            // meminta masukan NIM yang akan diupdate
            input.updateData(update); // panggil METHOD update
        }
        else if (masukan == "SHOW")
        {
            input.show(); // panggil METHOD show
        }
        else if (masukan == "CLOSE")
        {
            cek = false; // inisialisasi false agar keluar dari program
            system("cls");
            cout << "+------------------------------------------------------+\n";
            cout << "|                   TERIMA KASIH                       |\n";
            cout << "|       TELAH MENGGUNAKAN DBMS SEDERHANA ANANDITA      |\n";
            cout << "|         If you're brave enough to say goodbye,       |\n";
            cout << "|        life will reward you with a new hello.<3      |\n";
            cout << "+------------------------------------------------------+\n";
        }
    }
};