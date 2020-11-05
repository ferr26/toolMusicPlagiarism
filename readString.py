import csv



def generateArrayString():
    songs=[]
    path='./datasetParsingTesting.csv'

    with open(path) as csv_file:
        csv_reader = csv.reader(csv_file, delimiter=',')
        line_count = 0

        for row in csv_reader:
            if line_count == 0:
                #print(f'Column names are {", ".join(row)}')
                line_count += 1
            else:
                #print( row[2])

                songString = row[2]

                songs.append(songString)

                line_count += 1

    #print(f'Processed {line_count} lines.')

    #print(songs[0])
    #print(songs[1])
    return songs[0],songs[1]

