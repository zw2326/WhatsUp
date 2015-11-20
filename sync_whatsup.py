import os
import sys




if __name__ == '__main__':
	os.system('git add -A')
	os.system("git commit -m '" + (sys.argv[1] if len(sys.argv) > 1 else '') + "'")
	os.system('git push')