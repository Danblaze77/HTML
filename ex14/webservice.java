package demo;
import java.sql.*;
import java.util.*;
import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;
@WebService(serviceName = "NewWebService")
public class NewWebService {
     @WebMethod(operationName = "hello")
    public String hello(@WebParam(name = "name") String txt) {
        return "Hello " + txt + " !";
    }
    @WebMethod(operationName = "display")
    public String display(@WebParam(name = "orderid") int orderid) {
        //TODO write your implementation code here:
         StringBuilder result = new StringBuilder();
          try{
            Connection c=DriverManager.getConnection("jdbc:derby://localhost:1527/products");
            Statement st=c.createStatement();
            ResultSet rs=st.executeQuery("Select product from orderss where orderid=orderid");
            while(rs.next())
            {
                    String name = rs.getString("product");
                    result.append(name).append(" ");
               
            }
        }
        catch(SQLException e)
        {
        }
     return result.toString();
    }
    }  
