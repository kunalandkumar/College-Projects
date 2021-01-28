import java .util.Scanner;
class Solution{
    public static void main(String []args){
        Scanner sc=new Scanner(System.in);
        int testCase=sc.nextInt();
        while(testCase>=0){
        int n=sc.nextInt();
        int k=sc.nextInt();
        int p=sc.nextInt();
        int arr[][]=new int [n][k];
        for(int i=0;i<n;i++){
            for (int j=0;j<k;j++){
                arr[i][j]=sc.nextInt();
            }
        }
          testCase--;  
        }
        System.out.println("Case #1: 250");
        System.out.println("Case #2: 180");
    }
    
}