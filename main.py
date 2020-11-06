import csv
import metriche as mt
import spectClustering as sp

with open('datasetCouple.csv') as csv_file:
        csv_reader = csv.reader(csv_file, delimiter=',')
        rowCanzoni=[]
        for row in csv_reader:
                rowCanzoni.append(row)

        rowCanzoni.pop(0)

        arrayDiStringhe =[]
        for i in range(len(rowCanzoni)):
            if(rowCanzoni[i]):
                    arrayDiStringhe.append(rowCanzoni[i])

        stringa1= str(arrayDiStringhe[0])
        stringa=str(arrayDiStringhe[1])

stringa1 = stringa1.replace("[", "")
stringa1 = stringa1.replace("]", "")
stringa1 = stringa1.replace("'", "")


stringa = stringa.replace("[", "")
stringa = stringa.replace("]", "")
stringa = stringa.replace("'", "")
cosinedistance = mt.coseno(stringa,stringa1)
print(cosinedistance)

if(cosinedistance >0.7):
        print("TRUE")

if(cosinedistance < 0.45):
        print("FALSE")


if(cosinedistance >= 0.45 and cosinedistance <=0.7):
        plagio=sp.spectralClustering()
        if (plagio==True):
           print('TRUEC')
        if (plagio==False):
           print('FALSEC')

