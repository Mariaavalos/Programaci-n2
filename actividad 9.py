#cifrado cesar con interfas grafica

import tkinter as tk

def cifrar():
    texto = texto_.get()
    desplazamiento = int(desplazamiento_.get())
    
    resultado=""
    for i in (texto):
        letra=ord(i) + desplazamiento
        if letra>90:
            letra=letra-26
        else:chr(letra)
        resultado=resultado + chr(letra)
        
    
        

#creacion de la interfaz

app=tk.Tk()
app.geometry("300x500")
app.configure(background = "purple")
tk.Wm.wm_title(app,"Cifrado Cesar")

#primer Label

tk.Label(
   app,
   text = "Ingrese el mensaje que quiere cifrar",
   font = ("Verdana",10),
   background = "black",
   foreground="white",
).pack(expand=True)

#entrada del mensaje

texto_=tk.Entry(
   app,
   font = ("Verdana",10),
   background = "black",
   foreground="white",
   
).pack(expand=True)

tk.Label(
   app,
   text = "Ingrese el desplazamiento deseado",
   font = ("Verdana",10),
   background = "black",
   foreground="white",
).pack(expand=True)

desplazamiento_ = tk.Entry(
   app,
   font = ("Verdana",10),
   background = "black",
   foreground="white",
   
).pack(expand=True)

tk.Button(
    app,
    text = "Cifrar",
    font = ("courier",10),
    background = "black",
    foreground="white",
    command= cifrar,

).pack(expand=True)

tk.Label(
   app,
   text = "su mensaje es "+ resultado,
   font = ("Verdana",10),
   background = "black",
   foreground="white",
   
).pack(expand=True)
