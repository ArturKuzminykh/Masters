import  MySQLdb
import sys

ref_num = str(sys.argv[1])
type_bld = str(sys.argv[2])
year = str(sys.argv[3])
docs = str(sys.argv[4])
demol_date = str(sys.argv[5])
user = str(sys.argv[6])

db = MySQLdb.connect('localhost','root','','phpproject01')
insertrec = db.cursor()
sqlquery = 'insert into projects(usersName,modelReferenceNumber, typeOfBuilding, yearOfConstruction, availableDocumentation, demolitionStartDate) values ("'+user+'","'+ref_num+'", "'+type_bld+'","'+year+'","'+docs+'","'+demol_date+'") '
insertrec.execute(sqlquery)
print(ref_num, type_bld,year,docs,demol_date, sep = "*")
db.commit()
db.close()

