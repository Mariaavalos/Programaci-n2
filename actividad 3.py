import random
numero=random.randint(1,20)
modo=0
intentos=0
adi=0
vidas=6
print("tiene para jugar de manera facil o dificil, ingrese 1 para modo facil y 2 para modo dificil")
modo=int(input())
def nivel():
    if(modo==1):
        modo=0
        intentos=0
        adi=0
        vidas=6
    if(modo==2):
        modo=0
        intentos=0
        adi=0
        vidas=7
print("ingrese un número entre el 1 y el 20 tentra 6 intentos para adivinar")
adi=int(input())
while(intentos<vidas):
    if (adi>numero):
        print("el número ingresado es mayor al número aleatorio")
        adi=int(input())
    if(adi<numero):
        print("el número ingresado es menor al número aleatorio,vuelva a intentarlo")
        adi=int(input())
    if(adi==numero):
        print("a ganado es un crak")
        break
        intentos=intentos+1 
        
if(intentos==vidas):
    print("a perdido es un fraca")


        


        
     
        