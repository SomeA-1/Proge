# Arko Avarsalu
# 01.11.22
# Ülesanne 9

import datetime
import locale

today = datetime.date.today()
print(today.strftime("%d. %B %Y"))
locale.setlocale(locale.LC_ALL, "et_EE")
print(today.strftime("%d. %B %Y"))


ik="50601020826"
sp=datetime.date(int("20"+ik[1:3]),int(ik[3:5]), int(ik[5:7]))
print(sp)

age = today.year - sp.year - ((today.month, today.day) < (sp.month, sp.day))

print(age)









