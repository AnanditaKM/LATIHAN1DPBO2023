import java.util.ArrayList;
import java.util.Scanner;
class Query{

    private String nama;
    private String NIM;
    private String prodi;
    private String fakultas;
    private ArrayList<Mahasiswa> db = new ArrayList<>();
    Query()
    {
    }
    void addData()
    {
        Scanner scan = new Scanner(System.in);
        System.out.println("Masukan data");
        System.out.print("Nama :");
        nama = scan.nextLine();
        System.out.print("NIM :");
        NIM = scan.nextLine();
        System.out.print("Prodi :");
        prodi = scan.nextLine();
        System.out.print("Fakultas :");
        fakultas = scan.nextLine();

        Mahasiswa data = new Mahasiswa();
    
        data.setNama(nama);
        data.setNIM(NIM);
        data.setProdi(prodi);
        data.setFakultas(fakultas);

        db.add(data);
        System.out.println("data telah dimasukan");
    }
    void deleteData(String hapus)
    {
        for (int i = 0; i < db.size(); i++)
        {
            if (db.get(i).getNIM().equals(hapus))
            {
                db.remove(i);
            }
        }
    }
    void updateData(String update)
    {
        for (int i = 0; i < db.size(); i++)
        {
            if (db.get(i).getNIM().equals(update))
            {
                Scanner scan = new Scanner(System.in);

                System.out.println("Masukan data yang akan diupdate");
                System.out.print("Nama :");
                nama = scan.nextLine();
                System.out.print("NIM :");
                NIM = scan.nextLine();
                System.out.print("Prodi :");
                prodi = scan.nextLine();
                System.out.print("Fakultas :");
                fakultas = scan.nextLine();

                db.get(i).setNama(nama);
                db.get(i).setNIM(NIM);
                db.get(i).setProdi(prodi);
                db.get(i).setFakultas(fakultas);
            }
        }
    }
    void show()
    {
        for (int i = 0; i < db.size(); i++)
        {
            System.out.println(db.get(i).getNama() + " " + db.get(i).getNIM() + " " + db.get(i).getProdi() + " " + db.get(i).getFakultas());
        }
    }
}