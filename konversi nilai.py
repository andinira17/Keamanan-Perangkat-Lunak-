def has_numbers(inputString):
     return any(char.isdigit() for char in inputString)
nama = str(input("Nama mahasiswa:  "))
nim = float(input("Nim: "))
p = float(input("Masukkan nilai partisipasi: "))
t = float(input("Masukkan nilai tugas: "))
uts = float(input("Masukkan nilai uts: "))
uas = float(input("Masukkan nilai uas: "))
score = ((2*p)+(3*t)+(2*uts)+(3*uas))/10
if nim <0 or p <0 or t<0 or uts <0 or uas <0: 
    raise ValueError
print("Your grade is : ",score)
if nim <0 or p <0 or t<0 or uts <0 or uas <0: 
    raise "Data tidak valid"
elif all(x.isalpha() or x.isspace() for x in nama):
    print("Your grade is : ",score)
elif has_numbers(nama);
    raise "Nama tidak valid"
else: raise ValueError

if score >= 90:
    Grade="A"
elif score >= 80:
    Grade="B"
elif score >= 70:
    Grade="C"
elif score >= 60:
    Grade="D"
else:
    Grade="E"

print("Your grade is : ",Grade)