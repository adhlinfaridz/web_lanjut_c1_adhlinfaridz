kamus = {1:"selamat", 2:"pagi", 3:"dunia"}

kamus2 = {1:"kunci":"dunia", 1 : [1,2,3,4]}
                                    
kamus3 = {1: "selamat", 2:"datang",
          3:{"A": "di", "B":"kelas", "C":"memasak"}}
 
print(kamus[2])
print(kamus.get(2))
print(kamus2["kunci"])
print(kamus3[2])
print(kamus3[3]["B"])
