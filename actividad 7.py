import matplotlib.pyplot as plt
import random
import numpy as np
from PIL import Image,ImageOps
plt.rcParams["image.cmap"]="gray"

im1=Image.open("wanda.jpg")
im1gr=ImageOps.grayscale(im1)
ar=np.array(im1gr)

plt.imshow(ar)
plt.show()

f=266
c=474
cam=0

for i in range(f):
    for j in range(int(c/2)):
        ind_op=c-1-j
        cam=ar[i][j]
        ar[i][j]=ar[i][ind_op] 
        ar[i][ind_op]=cam
  
plt.imshow(ar)
plt.show()
        
        
        