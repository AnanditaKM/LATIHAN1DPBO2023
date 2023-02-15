/* Saya Anandita K NIM 2101114 mengerjakan soal Latihan 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. */
import java.util.ArrayList;
import java.util.Scanner;

public class Main
{
    public static void main(String[] args) {
        String masukan;// DEKLARASI
        Query input=new Query(); // INSTANSIASI CLASS QUERY
        int cek=1;// DEKLARASI &inisialisasi cek
        
        Scanner data = new Scanner(System.in);

        while (cek == 1)// jika cek== 1 makaTRUE  akan meminta masukan terus sampe BERTEMU close ATAU CEK=0(FALSE)
        {
            System.out.println( "---------------------------------------");
            System.out.println( "||<<Selamat Datang di DBMS Anandita>>||");
            System.out.println( "---------------------------------------");
            System.out.println( "||MENU QUERY                         ||");
            System.out.println( "||1.INSERT                           ||");
            System.out.println( "||2.DELETE                           ||");
            System.out.println( "||3.UPDATE                           ||");
            System.out.println( "||4.SHOW                             ||");
            System.out.println( "||5.CLOSE                            ||");
            System.out.println( "---------------------------------------");
            System.out.println( "silahkan masukan query :");
            masukan = data.nextLine();//// meminta masukan query
           
            if (masukan.equals("INSERT"))// jika masukan sama dengan insert maka akan memanggil method adddata yg ada di class query
            {
                input.addData();
            }
            else if (masukan.equals("UPDATE"))// jika masukan sama dengan UPDATE maka akan memanggil method updatedata yg ada di class query
            {
                System.out.println("masukan NIM yang akan di update:");
                String update = data.nextLine();
                input.updateData(update);
            }
            else if (masukan.equals("DELETE"))// jika masukan sama dengan DELETE maka akan memanggil method deletedata yg ada di class query
            {
                System.out.print("masukkan nim yang ingin dihapus");
                String hapus = data.nextLine();
                input.deleteData(hapus);
            }
            else if (masukan.equals("SHOW"))// jika masukan sama dengan show maka akan memanggil method show yg ada di class query
            {
                input.show();
            }
            else if(masukan.equals("CLOSE")){//menutup aplikasi
                cek=0;
            }
        }

        data.close();
    }
}