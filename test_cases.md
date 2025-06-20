# OrangeHRM - Test Cases

## 1️. Darbinieku saraksta ielāde
**Soļi:**  
1. Pieslēgties sistēmai kā administrators.  
2. Atvērt **"PIM" → "Employee List"**.  

**Sagaidāmais rezultāts: (apstiprināts)**  
Darbinieku saraksts tiek ielādēts un parādīti visi darbinieki.  

---

## 2️. Jauna darbinieka pievienošana
**Soļi:**  
1. Doties uz **"PIM" → "Add Employee"**.  
2. Aizpildīt vārdu, uzvārdu un darbinieka ID.  
3. Saglabāt datus.  

**Sagaidāmais rezultāts: (apstiprināts)**  
Darbinieks tiek pievienots un redzams sarakstā.  

---

## 3️. Darbinieka datu rediģēšana
**Soļi:**  
1. Atvērt **"PIM" → "Employee List"**.  
2. Izvēlēties jebkuru darbinieku un atvērt viņa profilu.  
3. Mainīt kādu informāciju (piemēram, adresi).  
4. Saglabāt izmaiņas.  

**Sagaidāmais rezultāts: (apstiprināts)**  
Dati tiek veiksmīgi atjaunināti un parādīti pareizi.  

---

## 4️. Darbinieka dzēšana
**Soļi:**  
1. Atvērt **"PIM" → "Employee List"**.  
2. Izvēlēties darbinieku un nospiest uz **Delete**.  
3. Apstiprināt dzēšanu.  

**Sagaidāmais rezultāts: (apstiprināts)**  
Darbinieks tiek izdzēsts un vairs nav redzams sarakstā.  

---

## 5️. Atvaļinājuma pieprasījuma iesniegšana
**Soļi:**  
1. Doties uz **"Leave" → "Apply"**.  
2. Izvēlēties atvaļinājuma veidu un datumus.  
3. Apstiprināt pieprasījumu.  

**Sagaidāmais rezultāts: (apstiprināts)**  
Pieprasījums tiek iesniegts un redzams sadaļā **"My Leave"**.  

---

## 6️. Atvaļinājuma pieprasījuma apstiprināšana
**Soļi:**  
1. Doties uz **"Leave" → "Leave List"**.  
2. Izvēlēties jaunu atvaļinājuma pieprasījumu.  
3. Apstiprināt vai noraidīt to.  

**Sagaidāmais rezultāts: (apstiprināts)**  
Atjaunināts pieprasījuma statuss tiek parādīts.  

---

## 7️. Darba laika uzskaite
**Soļi:**  
1. Doties uz **"Time" → "Timesheets"**.  
2. Atvērt darbinieka darba laika tabulu.  

**Sagaidāmais rezultāts: (apstiprināts)**  
Tiek attēloti darbinieka nostrādātie stundas un dienas.  

---

## 8️. Meklēšanas funkcionalitātes pārbaude
**Soļi:**  
1. Doties uz "PIM" → "Employee List".
2. Laukā ievadīt esoša darbinieka vārdu vai uzvārdu.
3. Nospiest Search.

**Sagaidāmais rezultāts: (apstiprināts)**  
Tiek parādīts pareizais darbinieks ar datiem.

---

## 9️. Lomas un tiesību piešķiršana lietotājam
**Soļi:**  
1. Doties uz **"Admin" → "User Management"**.  
2. Izvēlēties lietotāju un piešķirt jaunu lomu.  
3. Saglabāt izmaiņas.  

**Sagaidāmais rezultāts: (apstiprināts)**  
Lietotājs iegūst jaunās tiesības un var veikt atbilstošas darbības.  

---

## 10. Sistēmas darbība mobilajā versijā
**Soļi:**  
1. Atvērt mājaslapas mobīlo versiju, izmantojot F12.  
2. Pārbaudīt, vai visi elementi pareizi attēlojas.  

**Sagaidāmais rezultāts: (apstiprināts)**  
Sistēma pielāgojas mobilajam skatam.  

---

## 11. Darbinieka ID validācija
**Soļi:**
1. Pievienot darbinieku un ievadīt nekorektu ID formātu (piemēram, @!2)
2. Pārbaudīt.

**Sagaidāmais rezultāts:**  
Parādās kļūda par nepareizu formātu.

**Reālais rezultāts:**
Sistēma ļauj ievadīt ID, kas neatbilst formātam.

---

## 12. Atvaļinājumu saraksts
**Soļi:**
1. Pievienot jaunu atvaļinājumu darbiniekam.
2. Meklēt atvaļinājumus sadaļā "Leave List" par atbilstošu periodu.

**Sagaidāmais rezultāts:**  
Sarakstā parādas atbilstošs atvaļinājums.

**Reālais rezultāts:**
No Records Found

---

## 13. Meklēšana sadaļā "Recruitment"
**Soļi:**
1. Sadaļā Recruitment  → Candidates ievadīt vārda daļu (piemēram, John)
2. Pārbaudīt darbinieku sarakstu.

**Sagaidāmais rezultāts:** 
Sarakstā ir visi darbinieki, kam sakrīt vārds.

**Reālais rezultāts:**
Strādā tikai ar vienu konkrētu darbinieku, nav saraksta.

---

## 14. Reviews
**Soļi:**
1. Sadaļā "Dashboard" → My Actions radās, ka ir 1 Pending Self Review.
2. Pārbaudīt sarakstu.

**Sagaidāmais rezultāts:** 
Radās tas 1 Pending Self Review.

**Reālais rezultāts:**
Saraksts ir tukšs, No Records Found.
   
   
