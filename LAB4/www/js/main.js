
    console.log("Hello worid");
    // alert("Kritsada");

    var name = "Kritsada";
    let Age = 20;


    console.log("My name is " + name);
            // 0 1 2
    name = [5,6,7];
    name[0] = 10;
    name[2] = "KO";

    document.getElementById("content").innerHTML = name;

    // {"key":"value"}
    // user{"name":"KO"},{"name":"Boy"}
    var users = '{"name":"KO","name":"Boy"}';
    var json = JSON.parse(users);
    console.log(json);

    // emp = { name :"AA", name :"BB", name :"CC" };
    // console.log(emp);
    // console.log(emp[2].name);

    if(name != 5)
    {
        console.log("True");
    }else
    {
        console.log("False, name is 5");
    }

    for(i =1; i<5 ; i++)
    {
        console.log(i);
    }
    
    function Add(A,B)
    {
        c = A + B;
        return c;
    }
 
