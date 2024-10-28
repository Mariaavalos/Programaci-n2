mul=1
suma=0
csuma=0
cmul=1
matriz=[[1,2,3,4],
        [5,6,7,8],
        [9,10,11,12],
        [13,14,15,16]]

print(matriz)
print(matriz[1][2])
for i in range(len(matriz)):
    for j in range(len(matriz)):
        matriz[i][j]
        if([i]==[j]):
            suma=suma+matriz[i][j]
            mul=mul*matriz[i][j]
        if(j==3-i):
            csuma=csuma+matriz[i][j]
            cmul=cmul*matriz[i][j]
print("la suma de la diagonal pricipal es =",suma," la multiplicaciónde la diagonal pricipal es=",mul)
print("la suma de la contradiagonal pricipal es =",csuma," la multiplicaciónde la contradiagonal pricipal es=",cmul)

for i in range(len(matriz)):
    for j in range(len(matriz)):
        matriz[i][j]=0

print(matriz)


