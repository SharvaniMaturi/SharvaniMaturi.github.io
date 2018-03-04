m1=input("start:");
n1=input("end:");
m=int(m1);
n=int(n1);
for i in range(m,n+1):
   c=0;
   for j in range (1,i+1):
     if(i%j==0):
        c=c+1;
   if(c==2):
      print(i,' ',end='');
     