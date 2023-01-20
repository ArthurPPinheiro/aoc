import string

with open("input.txt", "r") as arquivo:
    texto = arquivo.readlines()

prioridades = list(string.ascii_lowercase) + list(string.ascii_uppercase)

print(prioridades)

soma = 0

def soma_iguais(partes:list):
    soma = 0
    for elemento in set(partes[0]):
        if elemento in partes[1]: soma += prioridades.index(elemento) + 1
    return soma


for linha in texto:
    partes = [linha[:(len(linha)//2)], linha[(len(linha)//2):-1]]
    soma += soma_iguais(partes)

print(soma)
