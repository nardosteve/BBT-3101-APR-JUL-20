<?php
/**
  Counties in the Republic of Kenya,Governors and their Political Parties.
*/

$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/**
 You should not modify anything above this line
*/
// @TODO : Your code starts here
// Array with county Data(Using Multi-Dimensional Array)
//
$county_data_information = array(
  #1
  array("#" => "1", "Name" => "Mombasa", "Governor" => "Hassan Ali Joho", "Website" => '<a href="http://www.mombasa.go.ke/"><u>http://www.mombasa.go.ke/</u></a>', "Party" => "ODM"),
  array("#" => "2", "Name" => "Kwale", "Governor" => "Salim Mvurya", "Website" => '<a href="http://www.kwalecountygov.com/"><u>http://www.kwalecountygov.com/</u>', "Party" => "Jubilee"),
  array("#" => "3", "Name" => "Kilifi", "Governor" => "Amason Jeffah Kingi", "Website" => '<a href="http://www.kilifi.go.ke/"><u>http://www.kilifi.go.ke/</u>', "Party" => "ODM"),
  array("#" => "4", "Name" => "Tana River", "Governor" => "Dhadho Godhana", "Website" => '<a href="http://www.tanariver.go.ke/"><u>http://www.tanariver.go.ke/</u>', "Party" => "ODM"),
  array("#" => "5", "Name" => "Lamu", "Governor" => "Fahim Yasin Twaha", "Website" => '<a href="http://www.lamu.go.ke/"><u>http://www.lamu.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "6", "Name" => "Taita-Taveta", "Governor" => "Granton Samboja", "Website" => '<a href="http://taitataveta.go.ke/"><u>http://taitataveta.go.ke/</u>', "Party" => "WDM K"),
  #2
  array("#" => "7", "Name" => "Garissa", "Governor" => "Ali Bunow Korane", "Website" => '<a href="http://garissa.go.ke/"><u>http://garissa.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "8", "Name" => "Wajir", "Governor" => "Mohamed Abdi Mohamud", "Website" => '<a href="http://www.wajir.go.ke/"><u>http://www.wajir.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "9", "Name" => "Mandera", "Governor" => "Ali Ibrahim Roba", "Website" => '<a href="http://www.mandera.go.ke/"><u>http://www.mandera.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "10", "Name" => "Marsabit", "Governor" => "Mohamud Mohamed Ali", "Website" => '<a href="http://marsabit.go.ke/"><u>http://marsabit.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "11", "Name" => "isiolo", "Governor" => "Mohamed Abdi Kuti", "Website" => '<a href="http://www.isiolo.go.ke/"><u>http://www.isiolo.go.ke/</u>', "Party" => "Independent"),
  array("#" => "12", "Name" => "Meru", "Governor" => "Kiraitu Murungi", "Website" => '<a href="http://meru.go.ke/"><u>http://meru.go.ke/</u>', "Party" => "Jubilee"),
  #3
  array("#" => "13", "Name" => "Tharaka Nithi", "Governor" => "Onesmus Muthomi Njuki", "Website" => '<a href="http://www.tharakanithi.go.ke/"><u>http://www.tharakanithi.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "14", "Name" => "Embu", "Governor" => "Martin Nyaga Wambora", "Website" => '<a href="http://www.embu.go.ke/"><u>http://www.embu.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "15", "Name" => "Kitui", "Governor" => "Charitu Ngilu", "Website" => '<a href="http://www.kitui.go.ke/"><u>http://www.kitui.go.ke/</u>', "Party" => "Narc Kenya"),
  array("#" => "16", "Name" => "Machakos", "Governor" => "Alfred Mutua", "Website" => '<a href="http://www.machakosgovernment.com/"><u>http://www.machakosgovernment.com/</u>', "Party" => "CCM"),
  array("#" => "17", "Name" => "Makueni", "Governor" => "Kivutha Kibwana", "Website" => '<a href="http://www.makueni.go.ke/"><u>http://www.makueni.go.ke/</u>', "Party" => "WDM K"),
  array("#" => "18", "Name" => "Nyandarua", "Governor" => "Franmia", "Website" => '<a href="http://www.nyandarua.go.ke/"><u>http://www.nyandarua.go.ke/</u>', "Party" => "Jubilee"),
  #4
  array("#" => "19", "Name" => "Nyeri", "Governor" => "Mutahi Kahiga", "Website" => '<a href="http://www.nyeri.go.ke/"><u>http://www.nyeri.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "20", "Name" => "Kirinyaga", "Governor" => "Ann Waiguru", "Website" => '<a href="http://www.kirinyaga.go.ke/"><u>http://www.kirinyaga.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "21", "Name" => "Murang'a", "Governor" => "Mwangi wa iria", "Website" => '<a href="http://muranga.go.ke/"><u>http://muranga.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "22", "Name" => "Kiambu", "Governor" => "Ferdinand Waititu Babayao", "Website" => '<a href="http://www.kiambu.go.ke/"><u>http://www.kiambu.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "23", "Name" => "Turkana", "Governor" => "osphat Nanok", "Website" => '<a href="http://www.turkana.go.ke/"><u>http://www.turkana.go.ke/</u>', "Party" => "ODM"),
  array("#" => "24", "Name" => "West Pokot", "Governor" => "John Krop Lonyang’apuo", "Website" => '<a href="http://www.westpokot.go.ke/"><u>http://www.westpokot.go.ke/</u>', "Party" => "KANU"),
  #5
  array("#" => "25", "Name" => "Samburu", "Governor" => "Moses Kasainie Lenolkulal", "Website" => '<a href="http://www.samburu.go.ke/"><u>http://www.samburu.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "26", "Name" => "Trans-Nzoia", "Governor" => "Patrick Khaemba", "Website" => '<a href="https://www.transnzoia.go.ke/"><u>https://www.transnzoia.go.ke/</u>', "Party" => "FORD Kenya"),
  array("#" => "27", "Name" => "Uasin gishu", "Governor" => "Jackson Mandago", "Website" => '<a href="http://uasingishu.go.ke/"><u>http://uasingishu.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "28", "Name" => "Elgeyo Marakwet", "Governor" => "Alex Tanui Tolgas", "Website" => '<a href="http://www.elgeyomarakwet.go.ke/"><u>http://www.elgeyomarakwet.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "29", "Name" => "Nandi", "Governor" => "Stephen Sang", "Website" => '<a href="http://nandi.go.ke/"><u>http://nandi.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "30", "Name" => "Baringo", "Governor" => "Stanley K Kipris", "Website" => '<a href="http://www.baringo.go.ke/"><u>http://www.baringo.go.ke/</u>', "Party" => "Jubilee"),
  #6
  array("#" => "31", "Name" => "Laikipia", "Governor" => "Ndiritu Muriithi", "Website" => '<a href="http://www.laikipiacounty.go.ke/"><u>http://www.laikipiacounty.go.ke/</u>', "Party" => "Independent"),
  array("#" => "32", "Name" => "Nakuru", "Governor" => "Lee Kinyanjui", "Website" => '<a href="http://www.nakuru.go.ke/"><u>http://www.nakuru.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "33", "Name" => "Narok", "Governor" => "Samuel Kuntai Ole Tunai", "Website" => '<a href="http://www.narok.go.ke/"><u>http://www.narok.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "34", "Name" => "Kajiado", "Governor" => "Joseph Ole Lenku", "Website" => '<a href="https://www.kajiado.go.ke/"><u>https://www.kajiado.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "35", "Name" => "Kericho", "Governor" => "Prof.Paul Chepkwony Kiprono", "Website" => '<a href="http://kericho.go.ke/"><u>http://kericho.go.ke/</u>', "Party" => "Jubilee"),
  array("#" => "36", "Name" => "Bomet", "Governor" => "Hillary Barchok", "Website" => '<a href="http://www.bomet.go.ke/"><u>http://www.bomet.go.ke/</u>', "Party" => "Jubilee"),
  #7
  array("#" => "37", "Name" => "Kakamega", "Governor" => "Wyclife Oparanya", "Website" => '<a href="http://www.kakamega.go.ke/"><u>http://www.kakamega.go.ke/</u>', "Party" => "ODM"),
  array("#" => "38", "Name" => "Vihiga", "Governor" => "Wilber Ottichilo", "Website" => '<a href="http://vihiga.go.ke/"><u>http://vihiga.go.ke/</u>', "Party" => "ODM"),
  array("#" => "39", "Name" => "Bungoma", "Governor" => "Wyclife Wafula Wangamiti", "Website" => '<a href="http://www.bungoma.go.ke/"><u>http://www.bungoma.go.ke/</u>', "Party" => "ODM"),
  array("#" => "40", "Name" => "Busia", "Governor" => "Sospeter Ojaamong", "Website" => '<a href="http://www.busiacounty.go.ke/"><u>http://www.busiacounty.go.ke/</u>', "Party" => "ODM"),
  array("#" => "41", "Name" => "Siaya", "Governor" => "Cornel Rasanga", "Website" => '<a href="http://www.siaya.go.ke/"><u>http://www.siaya.go.ke/</u>', "Party" => "ODM"),
  array("#" => "42", "Name" => "Kisumu", "Governor" => "Peter Anyang Nyong’o", "Website" => '<a href="http://kisumu.go.ke/"><u>http://kisumu.go.ke/</u>', "Party" => "ODM"),
  #8
  array("#" => "43", "Name" => "Homabay", "Governor" => "Cyprian Awiti", "Website" => '<a href="http://homabay.go.ke/"><u>http://homabay.go.ke/</u>', "Party" => "ODM"),
  array("#" => "44", "Name" => "Migori", "Governor" => "Zachary Okoth Obado", "Website" => '<a href="http://migori.go.ke/"><u>http://migori.go.ke/</u>', "Party" => "ODM"),
  array("#" => "45", "Name" => "Kisii", "Governor" => "James Ongware", "Website" => '<a href="http://www.kisii.go.ke/"><u>http://www.kisii.go.ke/</u>', "Party" => "ODM"),
  array("#" => "46", "Name" => "Nyamira", "Governor" => "John Nyangarama Obiena", "Website" => '<a href="http://www.nyamira.go.ke/"><u>http://www.nyamira.go.ke/</u>', "Party" => "ODM"),
  array("#" => "47", "Name" => "Nairobi", "Governor" => "Mike Sonko Mbuvi Kioko", "Website" => '<a href="http://www.nairobi.go.ke/"><u>http://www.nairobi.go.ke/</u>', "Party" => "Jubilee")
);

#echo $county_data_information arrat with key => value
/*
foreach ($county_data_information as $county) {.
  foreach ($county as $key => $value) {
    echo "$key $value <br>";
  }
}
*/
?>
