import string

with open("input.txt", "r", encoding="utf-8") as arquivo:
    texto = arquivo.readlines()


texto_separado = []

for trio in range(len(texto) // 3):
    texto_trios = []

    for i in range(3):
        texto_trios.append(texto.pop(0).strip('\n'))

    texto_separado.append(texto_trios)
    

# texto_trios = [list(texto[(i*3):(i+1)*3]) for i in range(len(texto)//3)]
# print(texto_trios)    

prioridades = list(string.ascii_lowercase) + list(string.ascii_uppercase)

soma = 0

def soma_iguais(partes:list):
    soma = 0
    for elemento in set(partes[0]):
        if elemento in partes[1] and elemento in partes[2]: soma += prioridades.index(elemento) + 1
    return soma

for trio in texto_separado:
    soma += soma_iguais(trio)

print(soma)
