#!/usr/bin/env bash

lastCommit=$(git log --format="%H" -n 1)
echo "Commit : $lastCommit"

filesChanged=$(git diff-tree --no-commit-id --name-only -r $lastCommit)
if [ ${#filesChanged[@]} -eq 0 ]; then
    echo "No files to update"
else
    for f in $filesChanged
	do
		#do not upload these files that aren't necessary to the site
		if [ "$f" != ".travis.yml" ] && [ "$f" != "deploy.sh" ] && [ "$f" != ".gitignore" ]
		then
	 		echo "Uploading $f"
	 		curl --ftp-create-dirs -T $f -u $FTP_USER:$FTP_PASS $FTP_HOST$f
        else
            echo "File $f ignored"
		fi
	done
fi