#Escriba un programa que pida el peso (en kilogramos) y la altura (en metros) de una persona y que calcule 
#su índice de masa corporal (imc).Se recuerda que el imc se calcula con la fórmula imc = peso / altura 2

print("CALCULO DEL INDICE DE MASA CORPORAL (IMC)")

peso = float(input("¿CUANTO PESA EN KILOGRAMOS?"))
altura = float(input("¿CUANTO MIDE EN METROS?"))

if peso != "" and altura != "":
    imc = peso/pow(altura, 2)
    print(f'Su IMC es de {imc}')

    if imc > 25:
        print("IMC MUY ALTO")
    elif imc < 20:
        print("IMC MUY BAJO")
    else:
        print("IMC MEDIO")
else:
    print("INTRODUZCA PESO Y ALTURA CORRECTO")