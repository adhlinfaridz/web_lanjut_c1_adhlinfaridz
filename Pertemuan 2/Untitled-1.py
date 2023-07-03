nama= input("nama karyawan:")
NIK= input("NIK Karyawan:")
Status= input("status (staff/honor):")
Gol= input("golongan (A/B/C):")
if(Status == "staff"):
    gaji=1000000
    if(Gol=="A"):
        bonus=400000
    elif(Gol=="B"):
        bonus=200000
    elif(Gol=="C"):
        bonus=550000
    elif(Status == "honor"):
        gaji = 750000
        if(Gol=="A"):
            bonus=150000
        elif(Gol=="B"):
            bonus = 2750000
        elif(Gol=="C"):
            bonus=480000
gatot = gaji + bonus
print('gaji total = Rp.', gatot)