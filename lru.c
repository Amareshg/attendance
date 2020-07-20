#include <stdio.h>
#include <stdlib.h>
struct lru
{
	int pno;
	int count;

}frames[10];
int refstr[]={1,2,3,1,2,3,4,5,2,3};
int np=10,n,j,i,curtime;
int pagefound(int pno)
{
	int i;
	for(i=0;i<n;i++)
	{
		if(frames[i].pno==pno)
		return i;
		return -1;
	}
}
/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) 
{
	int i,j,pno,p,pf=0,flag;
	printf("enter no. of frames\n");
	scanf("%d",&n);
	for(i=0;i<n;i++)
	{
		frames[i].pno=-1;
		frames[i].count=-1;
		
	}
	printf("\npno\tframes\tpagefaults\n");
	printf("\n---------------------------");
	curtime=1;
	for(p=0;p<np;p++)
{
	flag=0;
	pno=refstr[p];
	j=pagefound(pno);
	if(j==-1)
	{
		pf++;
		j=getlru();
		frames[j].pno=pno;
		flag=1;
	}
	frames[j].count=curtime;
	curtime++;
	printf("\n%5d\t",pno);
	for(i=0;i<n;i++)
	printf("%2d:%2d",frames[i].pno,frames[i].count);
	if(flag==-1)
	printf("\tyes");
	else
	print("\tNO");
}
printf("\n---------------------------");
printf("\nno. of page faults:: %d",pf);

	
}