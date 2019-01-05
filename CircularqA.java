
package circularqa;

import java.util.Scanner;

public class CircularqA {

    int f=-1,r=-1,size;
    int q[];
  public  CircularqA(int s)
  {
  q=new int[s];
  size=s;
  }
       


    public void enqueue(int n)
    {
        if((f==0 && r==size-1) || (f==r+1))
            System.out.println("overflow");
        else
        {
            if(r==-1)
            {
                f=r=0;
                q[r]=n;
            }
            else
            {
                r=(r+1)%size;
                q[r]=n;
            }
                
        }
        
        
    }
    public void dequeue()
    {
        if(f==-1)
        System.out.println("underflow");
        else
        {
           if(f==r)
            {
                f=-1;
                r=-1;
                System.out.println("deleted succesfully");
            }
            else
            {
                
            f=(f+1)%size;
               System.out.println("deleted succesfully");
            }
        }
    }
            
        
    
    
    public void display()
    {
                  if(f==-1 && r==-1)
            System.out.println("empty");
       else if(f>r)
        {
             for(int i=f;i<=size-1;i++) 
                    System.out.println(q[i]);
             for(int i=0;i<=r;i++)
                    System.out.println(q[i]);
        }
         else
        {
            for(int i=f;i<=r;i++)
            {
                   System.out.println(q[i]);
            }
        }

    }

    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        System.out.println("enter size of array");
        int s=sc.nextInt();
        CircularqA ob=new CircularqA(s);
           System.out.println("1.enqueue\n2.dequeue\n3.display\n4.exit");
           boolean flag=true;
           while(flag)
           {
                  System.out.println("enter the choice");
                  int c=sc.nextInt();
                  switch(c)
                  {
                      case 1:
                             System.out.println("enter the data");
                          int data=sc.nextInt();
                          ob.enqueue(data);
                          break;
                      case 2:
                             ob.dequeue();
                          break;
                      case 3:
                          ob.display();
                          break;
                      case 4:
                          flag=false;
                          break;
                      default :
                             System.out.println("invalid");
                          break;
                  }
           }
       
    }
    
}
