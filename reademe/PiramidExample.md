# Piramid Java Examples


### Activity class setup
```java
Example 1:

*
**
***
****

Code:
int n = 4;
for(int i = 1; i <= n; i++){
   for(int j = 1; j <= i; j++){
       System.out.print("*");
   }
   System.out.print("\n");
}

Example 2:
    *
   **
  ***
 ****

Code:
int n = 4;

for (int i = 1; i <= n; i++) {
   for (int j = 1; j <= (n - i); j++) {
       System.out.print(" ");
   }
   for (int k = 1; k <= i; k++) {
       System.out.print("*");
   }
   System.out.print("\n");
}





Example 3:
 ****
  ***
   **
    * 
Code:
int n = 4;

for (int i = n; i >= 1; i--) {
   for (int j = 1; j <= (n - i); j++) {
       System.out.print(" ");
   }
   for (int k = 1; k <= i; k++) {
       System.out.print("*");
   }
   System.out.println();
}


Example 4:
****
***
**
*

Code:
int n = 4;

for (int i = n; i >= 1; i--) {
   for (int k = 1; k <= i; k++) {
       System.out.print("*");
   }
   System.out.println();
}




Example 5:
    * 
   * * 
  * * * 
 * * * * 

Code:
int n = 4;

for (int i = 1; i <= n; i++) {
   for (int j = 1; j <= (n - i); j++) {
       System.out.print(" ");
   }
   for (int k = 1; k <= i; k++) {
       System.out.print("* ");
   }
   System.out.print("\n");
}


Example 6:
* * * * 
 * * * 
  * * 
   * 

Code:
int n = 4;

for (int i = n; i >= 1; i--) {
   for (int j = 1; j <= (n - i); j++) {
       System.out.print(" ");
   }
   for (int k = 1; k <= i; k++) {
       System.out.print("* ");
   }
   System.out.println();
}



```
 

