s="hellocbit";
k=len(s);
n=0;m=0;
for i in range(0,k):
  if(s[i]=='a'):
       n=n+1;
  elif(s[i]=='e'):
       n=n+1;
  elif(s[i]=='i'):
       n=n+1;
  elif(s[i]=='o'):
       n=n+1;
  elif(s[i]=='u'):
       n=n+1;
  else:
       m=m+1;
print("no.of vowels are:");
print(n);
print("no.of consonants are:");
print(m);