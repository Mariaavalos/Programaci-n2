# cifrado cesar tarannn
texto=""
desplazamiento=0
print("ingrese el texto a cifrar")
texto=input()
print("ingrese el desplazamiento")
desplazamiento=int(input())

def cifrar(texto,desplazamiento):
    resultado=""
    for i in (texto):
        letra=ord(i) + desplazamiento
        if letra>90:
            letra=letra-26
        else:chr(letra)
        resultado=resultado + chr(letra)
    return resultado

mensaje_cifrado=cifrar(texto,desplazamiento)
print(mensaje_cifrado)