import math


def func():
    d = int(input())
    ans = 2 * 10 ** 12
    for x in range(math.ceil(math.sqrt(d))):
        opp = math.sqrt(abs(d-x*x))
        plus = math.ceil(opp) ** 2 - opp ** 2
        minus = opp ** 2 - math.floor(opp) ** 2
        ans = min(ans, plus, minus)
    print(round(ans))


if __name__ == '__main__':
    func()
