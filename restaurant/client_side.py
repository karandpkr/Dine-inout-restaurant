import requests

postdata = {"first_name" : "testname", "last_name" : "", "email" : "" }
#sends empty post data to the form (which has required tags)
#check database after
res = requests.post("http://localhost:8080/testsite/register.php", data=postdata)


    
    












