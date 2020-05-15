<script>

/*
 * Prikaz porudzbine za klijenta - Jovana Pavic 0099/17
 * verzija 02 - rowless verzija
 * 
 *      postoje samo grupisanja u vidu jedne porudzbine
 */

var id = 0;

function showClientOrder(object) {
    /*Od ulaza potrebno:
        id - id porudzbine,
        name - ime porudzbine,
        stat - status porudzbine (0-nije potvr/odb, 1-potvrdjena, 2-odbijena, 3-nap, 4-pokupljena),
        people - broj osoba, 
        date - datum proslave, 
        orderedName[] - imena narucenih jela, 
        orderedAmount[] - broj porcija,
        orderedWeight[] - ukupna kolicina narucenog jela ili velicina porcije?,
        orderedPrice[] - ukupna cena tog jela
        discount - da li je ostvaren popust
    */

    let name = "ime porudzbine"; let people = 3; let date = new Date(); let orderedName = ["cordon blau", "lasagna"]; 
    let orderedAmount = [2, 3]; let orderedWeight = [600, 400]; let orderedPrice = [1200, 1600]; let discount = true;
    let stat = 1;
    //parsirati objekat u potrebne elemente

    //osnovni izgled bez detalja porudzbine
    var inner = "\
        <div class=about_order>\
            <text class=name>" + name+ "</text>\
            " + statusOptions(stat) + "\
            <br/>\
            <p class=aboutC>" + people + " osoba </p>\
            <p class=aboutC>" + dateString(date) + "</p>\
        </div>\
        <div class=order_details>\
            <table class=order_amount>\
            </table>\
        </div>\
    "
    //dohvatiti sve dummy elemente
    let dummy = $(".dummy");
    dummy.html(inner);
    dummy[0].id = id;
    dummy.removeClass("dummy").addClass("order");

    //dodavanje detalja porudzbine
    var order_details = $(".order_amount", $("#"+id));
    var price = 0;
    var weight = 0;
    for(let i=0; i<orderedName.length; i++) {
        var inner2 = "\
            <tr>\
                <td>" + orderedAmount[i] + "x </td>\
                <td class=name>" + orderedName[i] + "</td>\
                <td></td>\
                <td>" + orderedWeight[i] + "g</td>\
                <td>" + orderedPrice[i] + "din</td>\
            </tr>\
        "
        order_details.append(inner2);
        price += orderedPrice[i];
        weight += orderedWeight[i];
    }
    //dodavanje popusta
    if (discount == true) {
        var inner2 = "\
            <tr>\
                <td> ! </td>\
                <td colspan=2 class=name> Popust 10 % </td>\
                <td colspan=2>" + Math.round(price * (-0.1)) + "din</td>\
            </tr>\
        "
        order_details.append(inner2);
        price += Math.round(price * (-0.1));
    }
    //dodavanje konacne cene
    var inner3 = "\
        <tr>\
            <td colspan=2></td>\
            <td colspan=3><hr/></td>\
        </tr>\
        <tr>\
            <td colspan=2></td>\
            <td>" + people + " osoba</td>\
            <td>" + weight + "g</td>\
            <td>" + price + "din</td>\
        </tr>\
    "
    order_details.append(inner3);

    //dodavanje dummy elementa
    $(".cont").append("<div class='dummy'></div>");
    id++;
}

//razliciti prikaz (ikonica), dodaje hover opciju i prosedjuje odgovarajuci parametar
function statusOptions(stat) {
    //status porudzbine (0-nije potvr/odb, 1-potvrdjena, 2-odbijena, 3-nap, 4-pokupljena)
    var str="";
    switch (stat) {
        case 0: str = "<img src='../../../public/assets/icons/orderClient_waiting.svg' alt='?' onhover=showStatus(0)/>"; break;
        case 1: str = "<img src='../../../public/assets/icons/orderClient_acepted.svg' alt='+' onhover=showStatus(1)/>"; break;
        case 2: str = "<img src='../../../public/assets/icons/orderClient_rejected.svg' alt='-' onhover=showStatus(2)/>"; break;
        case 3: str = "<img src='../../../public/assets/icons/orderClient_done.svg' alt='!' onhover=showStatus(3)/>"; break;
        case 4: str = "<img src='../../../public/assets/icons/orderClient_picked.svg' alt='.' onhover=showStatus(4)/>"; break;
    }
    return str;
}

function dateString(date) {
    let year = date.getFullYear();
    let month =  date.getMonth() + 1;
    if (month < 10) month = "0" + month;
    let day = date.getDay();
    if (day < 10) day = "0" + day;
    let hour = date.getHours()
    if (hour < 10) hour = "0" + hour;
    let min = date.getMinutes();
    if (min < 10) min = "0" + min;
    let str = year + "-" + month + "-" + day + " " + hour + ":" + min;
    return str;
}

</script>
