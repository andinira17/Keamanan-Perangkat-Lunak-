print("Menghitung Volume dan Luas Balok")

p = int(input("Masukkan Panjang     = "))
l = int(input("Masukkan Lebar       = "))
t = int(input("Masukkan Tinggi      = "))

luas = 2*((p*l)+(p*t)+(l*t))
volume = p*l*t
if p <0 or l <0 or t<0: 
    raise ValueError

print("Luas Balok adalah    = ", luas)
print("Volume Balok adalah  = ", volume)