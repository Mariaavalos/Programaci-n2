import random
estudiantes=""
num=0
orden=[]
estudiantes= estudiantes=["maria","livia","erica","cata","anto","romina","victoria"]
for i in range(len(estudiantes)):
   num=random.randint(0,len(estudiantes)-1)
   essort=estudiantes[num]
   orden.append(essort)
   del(estudiantes[num])
print(orden)   
          
   
   
    
    

