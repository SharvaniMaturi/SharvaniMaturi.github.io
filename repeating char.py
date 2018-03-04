s=input("enter string:");
l=len(s);
flag=0;
for i in range(0,l):
    for j in range(i+1,l):
       if(s[i]==s[j]):
          print(s[i]);
          flag=1;
          break;
    if(flag==1):
        break;

