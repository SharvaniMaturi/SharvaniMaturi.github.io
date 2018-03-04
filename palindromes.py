s=input("string:");
le=len(s);
s1=list();
for i in range(0,le):
    k=s[le-i-1];
    s1.append(k);

s2=''.join(s1);
print(s2);
print(s);
 
if(s==s2):
   print("palindromes");
else:
   print("not palindrome");