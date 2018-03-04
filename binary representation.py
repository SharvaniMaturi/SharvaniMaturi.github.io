num=input("number:");
num1=int(num);
s=list();
k=0;
while(num1>0):
    k=num1%2;
    num1=num1//2;
    s.append(k);

print(s);
n=len(s);
i=n-1;
while(i>=0):
    print(s[i],end='');
    i=i-1;
